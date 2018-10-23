<?php

namespace AdsNews\Http\Controllers\Fronts;

use AdsNews\Http\Controllers\Controller;
use AdsNews\Post;
use AdsNews\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    public function index()
    {
        $is_home = true;      
        $products = DB::table('products')->where('status', 1)->paginate(12);
        // dd($products);
        return view('fronts.home.index')->with(compact('breadcrumbs', 'is_home', 'products'));
    }

    public function introduce()
    {
        $article = Post::find(INTRODUCE_ID);
        return view('fronts.articles.introduce')->with(compact('article'));
    }

    public function contact()
    {
        $info = '';
        return view('fronts.articles.contact')->with(compact('info'));
    }

    public function product(Request $request)
    {
        $products = [];
        $categoryId = $request->get('category'); 
        if (intval($categoryId) > 0) {
            $products = DB::table('products')->where('category_id', $categoryId)->where('status', 1)->paginate(12); 
        }        
        return view('fronts.product.product')->with(compact('products'));
    }
    public function productlist()
    {
        $products = [];
        $products = DB::table('products')->where('status', 1)->orderby('id','DESC')->paginate(12);
        return view('fronts.product.product')->with(compact('products'));
    }
    public function productdetail($id)
    { 
        $productdetail = DB::table('products')->where('id', $id)->where('status', 1)->get();
        return view('fronts.productdetail.productdetail')->with(compact('productdetail'));
    }    
}
