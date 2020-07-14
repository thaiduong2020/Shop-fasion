<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Fronend
Route::get('/trang-chu','ProductController@getView')->name('trangchu');
Route::get('/trang-chu/{id}','ProductController@getView2');

Route::get('/sanpham/{id}','ProductController@sanpham')->name('sanpham');


//Backend

Route::middleware('auth')->group(function(){
    Route::get('/admin', 'HomeController@home')->name('admin');
    Route::group(['prefix' => 'admin'], function () {
    
        
        Route::get('list-category','CategoryController@index')->name('list-danhmuc');
    
        Route::get('add-category','CategoryController@getCreate')->name('getAdd-danhmuc');
        Route::post('add-category','CategoryController@postCreate')->name('postAdd-danhmuc');
    
        Route::get('edit-category/{id}','CategoryController@getEdit')->name('getEdit-danhmuc');
        Route::post('edit-category/{id}','CategoryController@postEdit')->name('postEdit-danhmuc');
    
        Route::get('delete-category/{id}','CategoryController@postDelete')->name('postDelete-danhmuc');
    
        //Products
        Route::get('list-product','ProductController@index')->name('list-product');
    
        Route::get('add-product','ProductController@getCreate')->name('getAdd-product');
        Route::post('add-product','ProductController@postCreate')->name('postAdd-product');
    
        Route::get('edit-product/{id}','ProductController@getEdit')->name('getEdit-product');
        Route::post('edit-product/{id}','ProductController@postEdit')->name('postEdit-product');
    
        Route::get('delete-product/{id}','ProductController@postDelete')->name('postDelete-product');
    
        Route::get('search','ProductController@getSearch')->name('getSearch');

        //user
        Route::get('list-user','UserController@index')->name('list-user');

    });
});
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('logout', 'Auth\LoginController@logout');