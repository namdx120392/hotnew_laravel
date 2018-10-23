<?php

namespace AdsNews\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = DB::table('categories')->where('left', '>', 0)->where('status', 1)->orderBy('left', 'ASC')->get();
        $cate = [];
        $cateParent = [];
        $categoryBefore = 0;
        if (!empty($categories)) {
            foreach ($categories as $category) {
                if($category->level == 1){
                    $cate[$category->id] = [
                        'level' => $category->level,
                        'name' => $category->name
                    ];
                    $categoryBefore = $category->id;
                } else {
                    $cate[$categoryBefore]['child'][$category->id] = [
                        'level' => $category->level,
                        'name' => $category->name
                    ];
                }

                if ($category->level == 1) {
                    $cateParent[$category->id] = $category->name;
                }
            }
        }
        $productnew = DB::table('products')->where('status', 1)->orderBy('id', 'DESC')->limit(3)->get(); 

        view()->share('providerCategories', $cate);
        view()->share('providerCategoriesParent', $cateParent);
        view()->share('topproductnew', $productnew);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
