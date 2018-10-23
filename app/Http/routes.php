<?php

Route::get('/', ['as' => 'site-home', 'uses' => 'Fronts\IndexController@index']);
Route::get('/gioi-thieu.html', ['as' => 'site', 'uses' => 'Fronts\IndexController@introduce']);
Route::get('/lien-he.html', ['as' => 'lien-he', 'uses' => 'Fronts\IndexController@contact']);
Route::get('/tin-tuc.html', ['as' => 'tin-tuc', 'uses' => 'Fronts\IndexController@contact']);
Route::get('/san-pham', ['as' => 'san-pham', 'uses' => 'Fronts\IndexController@product']);
Route::get('/san-pham/chi-tiet/{id}', ['as' => 'chi-tiet', 'uses' => 'Fronts\IndexController@productdetail']);
Route::get('/san-pham-all', ['as' => 'san-pham-all', 'uses' => 'Fronts\IndexController@productlist']);



Route::group(['prefix' => 'admin', 'middleware' => ['web']], function () {
    Route::get('login.html', ['as' => 'login', 'uses' => 'Admin\UserController@login']);
    Route::post('login', ['as' => 'login_post', 'uses' => 'Admin\UserController@loginPost']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'Admin\UserController@logOut']);
});

// ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['authadminRoute']], function () {//authadminRoute
    Route::get('/', ['as' => 'home', 'uses' => 'Admin\DashBoardController@index']);
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'Admin\DashBoardController@index']);

    // **** USER ****
    Route::get('user', ['as' => 'user-list', 'uses' => 'Admin\UserController@index']);
    Route::get('user/add', ['as' => 'user-add', 'uses' => 'Admin\UserController@formUser']);
    Route::post('user/add', ['as' => 'user-add-post', 'uses' => 'Admin\UserController@addUser']);
    Route::get('user/edit/{id}', ['as' => 'user-edit', 'uses' => 'Admin\UserController@editUser']);
    Route::post('user/edit/{id}', ['as' => 'user-edit-post', 'uses' => 'Admin\UserController@storeUser']);
    Route::get('user/del/{id}', ['as' => 'user-del', 'uses' => 'Admin\UserController@delUser']);
    // **** USER ****

    // **** BANNER ****
    Route::get('banner', ['as' => 'banner', 'uses' => 'Admin\BannerController@index']);
    Route::get('banner/add', ['as' => 'banner-add', 'uses' => 'Admin\BannerController@addBanner']);
    Route::post('banner/add', ['as' => 'banner-add', 'uses' => 'Admin\BannerController@postBanner']);
    Route::get('banner/edit/{id}', ['as' => 'banner-edit', 'uses' => 'Admin\BannerController@editBanner']);
    Route::post('banner/edit/{id}', ['as' => 'banner-edit', 'uses' => 'Admin\BannerController@storeBanner']);
    Route::get('banner/del/{id}', ['as' => 'banner-del', 'uses' => 'Admin\BannerController@delBanner']);
    // **** BANNER ****

    // **** CATEGORIES ****
    Route::get('category', ['as' => 'category', 'uses' => 'Admin\CategoryController@index']);
    Route::get('category/add', ['as' => 'category-add', 'uses' => 'Admin\CategoryController@addCategory']);
    Route::post('category/add', ['as' => 'category-add', 'uses' => 'Admin\CategoryController@postCategory']);
    Route::get('category/edit/{id}', ['as' => 'category-edit', 'uses' => 'Admin\CategoryController@editCategory']);
    Route::post('category/edit/{id}', ['as' => 'category-edit', 'uses' => 'Admin\CategoryController@storeCategory']);
    Route::get('category/del/{id}', ['as' => 'category-del', 'uses' => 'Admin\CategoryController@delCategory']);
    Route::post('category/change-status', ['as' => 'category-status', 'uses' => 'Admin\CategoryController@changeStatus']);
    // **** CATEGORIES ****

    // **** CATEGORIES POST****
    Route::get('category-post', ['as' => 'category-post', 'uses' => 'Admin\CategoryPostController@index']);
    Route::get('category-post/add', ['as' => 'category-post-add', 'uses' => 'Admin\CategoryPostController@addCategory']);
    Route::post('category-post/add', ['as' => 'category-post-add', 'uses' => 'Admin\CategoryPostController@postCategory']);
    Route::get('category-post/edit/{id}', ['as' => 'category-post-edit', 'uses' => 'Admin\CategoryPostController@editCategory']);
    Route::post('category-post/edit/{id}', ['as' => 'category-post-edit', 'uses' => 'Admin\CategoryPostController@storeCategory']);
    Route::get('category-post/del/{id}', ['as' => 'category-post-del', 'uses' => 'Admin\CategoryPostController@delCategory']);
    Route::post('category-post/change-status', ['as' => 'category-post-status', 'uses' => 'Admin\CategoryPostController@changeStatus']);
    // **** CATEGORIES POST****

    // **** POST ****
    Route::get('post', ['as' => 'post', 'uses' => 'Admin\PostController@index']);
    Route::get('post/add', ['as' => 'post-add', 'uses' => 'Admin\PostController@addPost']);
    Route::post('post/add', ['as' => 'post-add', 'uses' => 'Admin\PostController@postPost']);
    Route::get('post/edit/{id}', ['as' => 'post-edit', 'uses' => 'Admin\PostController@editPost']);
    Route::post('post/edit/{id}', ['as' => 'post-edit', 'uses' => 'Admin\PostController@storePost']);
    Route::get('post/del/{id}', ['as' => 'post-del', 'uses' => 'Admin\PostController@delPost']);
    Route::post('post/change-status', ['as' => 'post-status', 'uses' => 'Admin\PostController@changeStatus']);
    // **** POST ****

    // **** PRODUCT ****
    Route::get('product', ['as' => 'product', 'uses' => 'Admin\ProductController@index']);
    Route::get('product/add', ['as' => 'product-add', 'uses' => 'Admin\ProductController@addProduct']);
    Route::post('product/add', ['as' => 'product-add', 'uses' => 'Admin\ProductController@postProduct']);
    Route::get('product/edit/{id}', ['as' => 'product-edit', 'uses' => 'Admin\ProductController@editProduct']);
    Route::post('product/edit/{id}', ['as' => 'product-edit', 'uses' => 'Admin\ProductController@storeProduct']);
    Route::get('product/del/{id}', ['as' => 'product-del', 'uses' => 'Admin\ProductController@delProduct']);
    Route::post('product/change-status', ['as' => 'product-status', 'uses' => 'Admin\ProductController@changeStatus']);
    // **** PRODUCT ****

    // **** CONFIG ****
    Route::get('config/logo', ['as' => 'config-logo', 'uses' => 'Admin\ConfigController@logo']);
    Route::get('config/info-footer', ['as' => 'config-footer', 'uses' => 'Admin\ConfigController@infoFooter']);
    Route::post('config/logo', ['as' => 'config-logo', 'uses' => 'Admin\ConfigController@postLogo']);
    Route::post('config/info-footer', ['as' => 'config-info-footer', 'uses' => 'Admin\ConfigController@postInfoFooter']);
    // **** CONFIG ****
});
