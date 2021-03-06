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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'admin', 'middleware'=>'auth.checkrole', 'as'=>'admin.'], function (){
    Route::group(['prefix'=>'categories', 'as'=>'categories.'], function (){
        Route::get('',['as'=>'index','uses'=>'CategoriesController@index']);
        Route::get('create',['as'=>'create','uses'=>'CategoriesController@create']);
        Route::get('edit/{id}',['as'=>'edit','uses'=>'CategoriesController@edit']);
        Route::post('update/{id}',['as'=>'update','uses'=>'CategoriesController@update']);
        Route::post('store',['as'=>'store','uses'=>'CategoriesController@store']);
    });
    
    Route::group(['prefix'=>'products', 'as'=>'products.'], function (){
        Route::get('',['as'=>'index','uses'=>'ProductsController@index']);
        Route::get('create',['as'=>'create','uses'=>'ProductsController@create']);
        Route::get('delete/{id}',['as'=>'delete','uses'=>'ProductsController@destroy']);
        Route::get('edit/{id}',['as'=>'edit','uses'=>'ProductsController@edit']);
        Route::post('update/{id}',['as'=>'update','uses'=>'ProductsController@update']);
        Route::post('store',['as'=>'store','uses'=>'ProductsController@store']); 
    });

    Route::group(['prefix'=>'clients', 'as'=>'clients.'], function (){
        Route::get('',['as'=>'index','uses'=>'ClientsController@index']);
        Route::get('create',['as'=>'create','uses'=>'ClientsController@create']);
        Route::get('delete/{id}',['as'=>'delete','uses'=>'ClientsController@destroy']);
        Route::get('edit/{id}',['as'=>'edit','uses'=>'ClientsController@edit']);
        Route::post('update/{id}',['as'=>'update','uses'=>'ClientsController@update']);
        Route::post('store',['as'=>'store','uses'=>'ClientsController@store']);
    });
});