<?php

namespace AdsNews\Http\Controllers\Admin;

use AdsNews\Helpers\StringHelper;
use AdsNews\Products;
use Illuminate\Http\Request;
use AdsNews\Http\Requests;
use AdsNews\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;


class ProductController extends Controller
{
    protected $_width = 300;
    protected $_height = 350;
    public function index()
    {
        $breadcrumbs = array('product', null);
        $posts = DB::table('products')
            ->select('title', 'products.id', 'categories.name as category_id', 'products.status', 'products.created_at', 'users.name as author_id')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->leftJoin('users', 'products.author_id', '=', 'users.id')
            ->paginate(15);
        return view('admin.products.index')->with(compact('posts', 'breadcrumbs'));
    }

    public function addProduct()
    {
        $breadcrumbs = array('product-add', null);
        $categories = DB::table('categories')->where('left', '>', 0)->orderBy('left', 'ASC')->get();

        $cate = [];
        $cate['1'] = 'Danh mục cha';
        if (!empty($categories)) {
            foreach ($categories as $category) {
                $space = str_repeat('|——', $category->level - 1);
                $cate[$category->id] = $space . $category->name;
            }
        }
        return view('admin.products.form-product')->with(compact('cate', 'breadcrumbs'));
    }

    public function postProduct(Requests\ProductRequest $request)
    {
        $data_post = array(
            'title' => $request->get('title'),
            'category_id' => $request->get('category_id'),
            'status' => $request->get('status'),
            'content' => $request->get('content'),
            'lead' => $request->get('lead'),
            'description' => $request->get('description'),
            'author_id' => Auth::user()->id
        );

        try {
            /*$image = $request->file('thumbnail');
            if ($image) {
                $data['thumbnail'] = $this->createImage($image);
            }*/
            // $this->createAndResizeImage('thumbnail','/img/upload/product/test/');
            if($request->hasFile('thumbnail')) { 
                $image       = $request->file('thumbnail');
                $filename    = $image->getClientOriginalName(); 
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize($this->_width, $this->_height); 
                
                $data['thumbnail'] = '/img/upload/product/' . $filename;
                $image_resize->save(public_path($data['thumbnail'])); 
            }
        } catch (\Exception $ex) {
        }

        $id_insert = Products::create($data_post);

        // Update slug
        $post = Products::find($id_insert->id);
        $post->slug = str_slug($request->get('title')) . '-' . $id_insert->id . '.html';
        $post->save();

        return redirect('admin/product');
    }

    public function editProduct($id)
    {
        $post = Products::find($id);
        $breadcrumbs = array('product-edit', $post);

        $listCategories = DB::table('categories')->where('left', '>', 0)->orderBy('left', 'ASC')->get();

        $categories = [];
        $categories['1'] = 'Danh mục cha';
        if (!empty($listCategories)) {
            foreach ($listCategories as $category) {
                $space = str_repeat('|——', $category->level - 1);
                $categories[$category->id] = $space . $category->name;
            }
        }
        return view('admin.products.edit-product')->with(compact('post', 'categories', 'breadcrumbs'));
    }

    public function storeProduct($id, Requests\ProductRequest $request)
    {
        $post = Products::find($id);

        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->lead = $request->get('lead');
        $post->description = $request->get('description');
        $post->category_id = $request->get('category_id');
        $post->status = $request->get('status');

        try {
            /*$image = $request->file('thumbnail');
            if ($image) {
                $post->thumbnail = $this->createImage($image);
            }*/
           //$this->createAndResizeImage('thumbnail','/img/upload/product/test/');
            if($request->hasFile('thumbnail')) { 
                $image       = $request->file('thumbnail');
                $filename    = $image->getClientOriginalName(); 
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize($this->_width, $this->_height); 
                
                $thumbnail = '/img/upload/product/' . $filename;
                $post->thumbnail = $thumbnail;
                $image_resize->save(public_path($thumbnail)); 
            }
        } catch (\Exception $ex) {
        }

        $post->slug = str_slug($request->get('title')) . '-' . $id . '.html';

        $post->save();
        return redirect('/admin/product/edit/' . $id);
    }

    public function createAndResizeImage($element, $path, $option = []){
        //dd($element);
        dd($path);
        if($request->hasFile($element)) { 
            $image       = $request->file($element);
            $filename    = $image->getClientOriginalName(); 
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize($this->_width, $this->_height);  
            $thumbnail = $path . $filename;
            $post->thumbnail = $thumbnail;
            $image_resize->save(public_path($thumbnail)); 
            return $post->thumbnail;
        }
        return false;
    }

    public function delProduct($id)
    {
        $products = Products::find($id);
        $this->deleteImage($products->path);
        $products->delete();
        return redirect('/admin/product');
    }

    public function createImage($image)
    {
        $path = '/img/upload/product/';
        $name = sha1(Carbon::now()) . '.' . $image->guessExtension();
        $image->move(getcwd() . $path, $name);
        return $path . $name;
    }

    public function deleteImage($oldPath)
    {
        $oldPath = getcwd() . $oldPath;
        @unlink(realpath($oldPath));
    }

    public function changeStatus(Request $request)
    {
        $id = $request->get('id');
        $status = $request->get('status');
        $category = Products::find($id);
        $category->status = $status;
        $category->save();
    }
}
