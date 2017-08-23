<?php

Auth::routes();
Route::get('/','HomeController@index');
Route::get('home','HomeController@index');
Route::get('cart/add/{id}','CartController@store');
Route::get('cart','CartController@index');
Route::get('cart/destroy/{id}','CartController@destroy');
Route::get('product','HomeController@ProductType');
Route::get('product_detail/{id}','HomeController@ProductDetail');
Route::get('news','HomeController@getNews');

Route::group(['middleware' => ['auth']], function () {
    //login thi vao duoc ko can phai la admin
    Route::get('admin/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    //login va phai la admin
    Route::group(['middleware' => ['ckAdmin']], function () {    
        Route::get('admin', 'Admin\HomeController@index');
        Route::get('admin/dashboard', 'Admin\DashboardController@index');
        Route::resource('admin/group', 'Admin\GroupController');
        Route::resource('admin/user', 'Admin\UserController');
        Route::resource('admin/category', 'Admin\CategoryController');
        Route::resource('admin/product', 'Admin\ProductController');
        Route::resource('admin/supplier', 'Admin\SupplierController');
        Route::resource('admin/type', 'Admin\TypeController');
        Route::resource('admin/order', 'Admin\OrderController');
        Route::resource('admin/news', 'Admin\NewsController');
        Route::resource('admin/export', 'Admin\ExportController');
        Route::resource('admin/slide', 'Admin\SlideController');
    });
});