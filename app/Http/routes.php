<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
//Route::get('/login', function() {
//    return view('admin.login');
//});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('/', function() {
       return view('admin.index');
    });
    Route::group(['prefix' => 'cate'], function() {
        Route::get('/', ['as' => 'admin.cate.index', 'uses' => 'CateController@index']);
        Route::get('/create', ['as' => 'admin.cate.create', 'uses' => 'CateController@create']);
        Route::post('/create', ['as' => 'admin.cate.store', 'uses' => 'CateController@store']);
        Route::get('/{id}/edit', ['as' => 'admin.cate.edit', 'uses' => 'CateController@edit']);
        Route::post('/{id}/edit', ['as' => 'admin.cate.update', 'uses' => 'CateController@update']);
        Route::get('/{id}/delete', ['as' => 'admin.cate.destroy', 'uses' => 'CateController@destroy']);
    });
    Route::group(['prefix' => 'product'], function() {
       Route::get('/', ['as' => 'admin.product.index', 'uses' => 'ProductController@index']);
       Route::get('/create', ['as' => 'admin.product.create', 'uses' => 'ProductController@create']);
       Route::post('/create', ['as' => 'admin.product.store', 'uses' => 'ProductController@store']);
       Route::get('/{id}/edit', ['as' => 'admin.product.edit', 'uses' => 'ProductController@edit']);
       Route::post('/{id}/edit', ['as' => 'admin.product.update', 'uses' => 'ProductController@update']); 
       Route::get('/{id}/delete', ['as' => 'admin.product.destroy', 'uses' => 'ProductController@destroy']); 
    });
});
