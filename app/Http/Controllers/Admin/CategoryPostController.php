<?php

namespace AdsNews\Http\Controllers\Admin;

use AdsNews\CategoriesPosts;
use Illuminate\Http\Request;

use AdsNews\Http\Requests;
use AdsNews\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use AdsNews\Http\Requests\CategoryRequest;
use AdsNews\Categories;

class CategoryPostController extends Controller
{
    /**
     * @return $this
     */
    public function index()
    {
        $breadcrumbs = array('category-post', null);
        $categories = DB::table('categories_posts')->where('left', '>', 0)->orderBy('left', 'ASC')->get();
        return view('admin.categories-post.index')->with(compact('categories', 'breadcrumbs'));
    }

    /**
     * @return $this
     */
    public function addCategory()
    {
        $breadcrumbs = array('category-post-add', null);
        $listCategories = DB::table('categories_posts')->where('left', '>', 0)->orderBy('left', 'ASC')->get();

        $categories = [];
        $categories['1'] = 'Danh mục cha';
        if (!empty($listCategories)) {
            foreach ($listCategories as $category) {
                $space = str_repeat('|——', $category->level - 1);
                $categories[$category->id] = $space . $category->name;
            }
        }
        return view('admin.categories-post.form-category-post')->with(compact('categories', 'breadcrumbs'));
    }

    /**
     * @param Request $request
     */
    public function changeStatus(Request $request)
    {
        $id = $request->get('id');
        $status = $request->get('status');
        $category = CategoriesPosts::find($id);
        $category->status = $status;
        $category->save();
        //return true;
    }

    /**
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postCategory(Requests\CategoryPostRequest $request)
    {
        $image = $request->file('image');
        $data = array(
            'name' => $request->get('name'),
            'status' => $request->get('status'),
            'description' => $request->get('description'),
            'parent' => $request->get('parent')
        );
        if (!empty($request->file('image')))
            $data['image'] = $this->createImage($image);

        $this->insertNode($data, $request->get('parent'), array('position' => 'right'));
        return redirect('admin/category-post/add');
    }

    /**
     * @param $data
     * @param $nodeID
     * @param $options
     * @return bool
     */
    public function insertNode($data, $nodeID, $options)
    {
        $nodeInfo = CategoriesPosts::find($nodeID);
        switch ($options['position']) {
            case 'left':
                $updateLeft = DB::table('categories_posts')->where('left', '>', $nodeInfo['left'])->get();
                $updateRight = DB::table('categories_posts')->where('right', '>', $nodeInfo['left']);
                $data['parent'] = $nodeInfo->id;
                $data['level'] = $nodeInfo->level + 1;
                $data['left'] = $nodeInfo->left + 1;
                $data['right'] = $nodeInfo->left + 2;
                break;
            case 'before':
                $updateLeft = DB::table('categories_posts')->where('left', '>=', $nodeInfo['left'])->get();
                $updateRight = DB::table('categories_posts')->where('right', '>', $nodeInfo['left'])->get();
                $data['parent'] = $nodeInfo->parent;
                $data['level'] = $nodeInfo->level;
                $data['left'] = $nodeInfo->left;
                $data['right'] = $nodeInfo->left + 1;
                break;
            case 'after':
                $updateLeft = DB::table('categories_posts')->where('left', '>=', $nodeInfo['right'])->get();
                $updateRight = DB::table('categories_posts')->where('right', '>', $nodeInfo['right'])->get();
                $data['parent'] = $nodeInfo->parent;
                $data['level'] = $nodeInfo->level;
                $data['left'] = $nodeInfo->right + 1;
                $data['right'] = $nodeInfo->right + 2;
                break;
            case 'right':
            default:
                $updateLeft = DB::table('categories_posts')->where('left', '>', $nodeInfo['right'])->get();
                $updateRight = DB::table('categories_posts')->where('right', '>=', $nodeInfo['right'])->get();
                $data['parent'] = $nodeInfo->id;
                $data['level'] = $nodeInfo->level + 1;
                $data['left'] = $nodeInfo->right;
                $data['right'] = $nodeInfo->right + 1;
                break;
        }

        if (!empty($updateLeft)) {
            foreach ($updateLeft as $left) {
                DB::table('categories_posts')->where('id', $left->id)->update(['left' => $left->left + 2]);
            }
        }

        if (!empty($updateRight)) {
            foreach ($updateRight as $right) {
                DB::table('categories_posts')->where('id', $right->id)->update(['right' => $right->right + 2]);
            }
        }

        CategoriesPosts::create($data);
        return true;
    }

    /**
     * @param $id
     * @return $this
     */
    public function editCategory($id)
    {
        $category = CategoriesPosts::find($id);
        $breadcrumbs = array('category-post-edit', $category);
        $categories = DB::table('categories_posts')
            ->where('left', '>', 0)
            ->orderBy('left', 'ASC')->get();
        return view('admin.categories-post.edit-category-post')
            ->with(compact('category', 'breadcrumbs', 'categories'));
    }

    /**
     * @param $data
     * @param $nodeID
     * @param null $nodeParentID
     * @param null $options
     */
    public function updateNode($data, $nodeID, $nodeParentID = null, $options = null)
    {
        if (!empty($nodeParentID)) {
            $nodeParentInfo = CategoriesPosts::find($nodeParentID);
            $nodeInfo = CategoriesPosts::find($nodeID);
            if (!empty($nodeParentInfo) && $nodeInfo->parent != $nodeParentInfo->id) {
                $this->moveRight($nodeID, $nodeParentID);
            }
        }
        DB::table('categories_posts')
            ->where('id', $nodeID)
            ->update([
                'name' => $data['name'],
                'status' => $data['status'],
                'description' => $data['description'],
                'parent' => $data['parent'],
                'slug' => $data['slug'],
                'image' => $data['image']
            ]);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeCategory($id, Request $request)
    {
        $data = array(
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'status' => $request->get('status'),
            'description' => $request->get('description'),
            'parent' => $request->get('parent')
        );

        $image = $request->file('image');
        if (!empty($image)) {
            $data['image'] = $this->createImage($image);
        }

        if ($data['parent'] == $id)
            $data['parent'] = null;

        $this->updateNode($data, $id, $data['parent']);
        return redirect('/admin/category-post');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delCategory($id)
    {
        $categories = CategoriesPosts::find($id);
        $this->deleteImage($categories->path);

        $nodeInfo = CategoriesPosts::find($id);
        $nodes = DB::table('categories_posts')->where('parent', $id)->orderBy('left', 'ASC')->get();

        if (!empty($nodes)) {
            foreach ($nodes as $node) {
                $this->moveRight($node->id, $nodeInfo->parent);
            }
        }
        $this->detachBranch($id, array('task' => 'remove-node'));

        return redirect('/admin/category-post');
    }

    /**
     * @param $image
     * @return string
     */
    public function createImage($image)
    {
        $path = '/img/upload/category-post/';
        $name = sha1(Carbon::now()) . '.' . $image->guessExtension();
        $image->move(getcwd() . $path, $name);
        return $path . $name;
    }

    /**
     * @param $oldPath
     */
    public function deleteImage($oldPath)
    {
        $oldPath = getcwd() . $oldPath;
        @unlink(realpath($oldPath));
    }

    /**
     * @param $nodeMoveID
     * @param $nodeSelectionID
     */
    public function moveRight($nodeMoveID, $nodeSelectionID)
    {
        // ========================= Detach branch =========================
        $totalNode = $this->detachBranch($nodeMoveID);

        $nodeSelectionInfo = CategoriesPosts::find($nodeSelectionID);
        $nodeMoveInfo = CategoriesPosts::find($nodeMoveID);

        // ========================= Node on tree (LEFT) =========================
        $updateLeft = DB::table('categories_posts')
            ->where('left', '>', $nodeSelectionInfo->right)
            ->where('right', '>', 0)
            ->get();
        if (!empty($updateLeft)) {
            foreach ($updateLeft as $node) {
                $leftNew = $node->left + ($totalNode * 2);
                DB::table('categories_posts')
                    ->where('id', $node->id)
                    ->update([
                        'left' => $leftNew
                    ]);
            }
        }

        // ========================= Node on tree (RIGHT) =========================
        $updateRight = DB::table('categories_posts')
            ->where('right', '>=', $nodeSelectionInfo->right)
            ->get();
        if (!empty($updateRight)) {
            foreach ($updateRight as $node) {
                $rightNew = $node->right + ($totalNode * 2);
                DB::table('categories_posts')
                    ->where('id', $node->id)
                    ->update([
                        'right' => $rightNew
                    ]);
            }
        }

        // ========================= Node on branch (LEVEL) =========================
        $updateLevel = DB::table('categories_posts')
            ->where('right', '<=', 0)
            ->get();
        if (!empty($updateLevel)) {
            foreach ($updateLevel as $node) {
                // ========================= Node on branch (LEVEL) =========================
                $level = $node->level + $nodeSelectionInfo->level - $nodeMoveInfo->level + 1;
                // ========================= Node on branch (LEFT) ==========================
                $left = $node->left + $nodeSelectionInfo->right;
                // ========================= Node on branch (RIGHT) =========================
                $right = $node->right + $nodeSelectionInfo->right + $totalNode * 2 - 1;

                DB::table('categories_posts')
                    ->where('id', $node->id)
                    ->update([
                        'level' => $level,
                        'left' => $left,
                        'right' => $right
                    ]);
            }
        }

        // ========================= Node move (PARENT) =========================
        DB::table('categories_posts')
            ->where('id', $nodeMoveInfo->id)
            ->update([
                'parent' => $nodeSelectionInfo->id
            ]);
    }

    /**
     * @param $nodeMoveID
     * @param null $options
     * @return float
     */
    public function detachBranch($nodeMoveID, $options = null)
    {
        $moveInfo = CategoriesPosts::find($nodeMoveID);
        $moveLeft = $moveInfo->left;
        $moveRight = $moveInfo->right;
        $totalNode = ($moveRight - $moveLeft + 1) / 2;

        // ================================== Node on branch ==================================
        if ($options == null) {
            $updateNode = DB::table('categories_posts')
                ->whereBetween('left', [$moveInfo->left, $moveInfo->right])
                ->get();
            if (!empty($updateNode)) {
                foreach ($updateNode as $node) {
                    $leftNew = ($node->left - $moveLeft);
                    $rightNew = ($node->right - $moveRight);
                    DB::table('categories_posts')
                        ->where('id', $node->id)
                        ->update([
                            'left' => $leftNew,
                            'right' => $rightNew
                        ]);
                }
            }
        }

        if ($options['task'] == 'remove-node') {
            $d = DB::table('categories_posts')
                ->whereBetween('left', [(int)$moveInfo->left, (int)$moveInfo->right])
                ->delete();
        }
        // ================================== Node on tree (LEFT) ==================================
        $updateNode = DB::table('categories_posts')
            ->where('left', '>', $moveRight)
            ->get();
        if (!empty($updateNode)) {
            foreach ($updateNode as $node) {
                $leftNew = $node->left - ($totalNode * 2);
                DB::table('categories_posts')
                    ->where('id', $node->id)
                    ->update([
                        'left' => $leftNew
                    ]);
            }
        }

        // ================================== Node on tree (RIGHT) ==================================
        $updateNode = DB::table('categories_posts')
            ->where('right', '>', $moveRight)
            ->get();
        if (!empty($updateNode)) {
            foreach ($updateNode as $node) {
                $rightNew = $node->right - ($totalNode * 2);
                DB::table('categories_posts')
                    ->where('id', $node->id)
                    ->update([
                        'right' => $rightNew
                    ]);
            }
        }

        return $totalNode;
    }
}
