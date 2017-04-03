<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/primary', function () {
    return view('primary/index');
});
Route::get('/login', function () {
    return view('primary/login');
});
Route::get('/register', function () {
    return view('primary/register');
});
Route::group(['prefix'=>'admin'], function(){
    Route::group(['prefix'=>'cate'], function(){
        Route::get('/add', ['as'=>'admin.cate.add', 'uses'=>'CateController@getAdd']);
        Route::post('/add', ['as'=>'admin.cate.add', 'uses'=>'CateController@postAdd']);
        Route::get('/list', ['as'=>'admin.cate.list', 'uses'=>'CateController@getList']);
        Route::get('/delete/{id}', ['as'=>'admin.cate.delete', 'uses'=>'CateController@getDelete']);
        Route::get('/edit/{id}', ['as'=>'admin.cate.edit', 'uses'=>'CateController@getEdit']);
        Route::post('/edit}', ['as'=>'admin.cate.edit', 'uses'=>'CateController@postEdit']);
    });
    Route::group(["prefix"=>"product"], function(){
        Route::get('/add', ['as'=>'admin.product.add', 'uses'=>'ProductController@getAdd']);
        Route::post('/add', ['as'=>'admin.product.add', 'uses'=>'ProductController@postAdd']);
        Route::get('/list', ['as'=>'admin.product.list', 'uses'=>'ProductController@getlist']);
        Route::get('/delete/{id}', ['as'=>'admin.product.delete', 'uses'=>'ProductController@getDelete']);
        Route::get('/edit/{id}', ['as'=>'admin.product.edit', 'uses'=>'ProductController@getEdit']);
        Route::post('/edit/{id}', ['as'=>'admin.product.edit', 'uses'=>'ProductController@postEdit']);
    });
    Route::group(['prefix'=>'user'], function(){
        Route::get('/add', function () {
            return view('admin/user/add');
        });
    });
});