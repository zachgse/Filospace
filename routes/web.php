<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

Route::group(['middleware' => "guest"], function(){
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});

Route::get('/', [MainController::class, 'index'])->name('welcome');

Route::group(['namespace'=>"App\Http\Controllers", 'as'=>"homepage.", 'prefix'=>"homepage"], function() {
    Route::get('show/{id?}', ['as'=>"show", 'uses'=>"MainController@show"]);
    Route::get('creative', ['as'=>"creative", 'uses'=>"MainController@creative"]);
    Route::get('video', ['as'=>"video", 'uses'=>"MainController@video"]);
    Route::get('music', ['as'=>"music", 'uses'=>"MainController@music"]);
    Route::get('vector', ['as'=>"vector", 'uses'=>"MainController@vector"]);
    Route::post('search', ['as'=>"search", 'uses'=>"MainController@search"]);
    
    Route::post('inquiry', ['as'=>"inquiry", 'uses'=>"InquiryController@store"]);
    Route::post('cart/{id?}', ['as'=>"add-cart", 'uses'=>"CartController@store"]);
});

Route::group(['middleware' => "auth"], function(){
    Route::get('logout', [AuthController::class, 'destroy'])->name('logout');

    Route::group(['namespace'=>"App\Http\Controllers", 'as'=>"admin.", 'prefix'=>"admin"], function() {
        Route::get('/', ['as'=>"index", 'uses'=>"AdminController@index"]);
        Route::get('dashboard', ['as'=>"dashboard", 'uses'=>"AdminController@dashboard"]);
        Route::get('create', ['as'=>"create", 'uses'=>"AdminController@create"]);
        Route::post('create', ['uses'=>"AdminController@store"]);
        Route::get('edit{id?}', ['as'=>"edit", 'uses'=>"AdminController@edit"]);
        Route::post('edit{id?}', ['uses'=>"AdminController@update"]);
        Route::post('delete/{id?}', ['as'=>"delete", 'uses'=>"AdminController@destroy"]);
        Route::get('inquiry-index', ['as'=>"inquiry-index", 'uses'=>"InquiryController@index"]);
    });
    
    Route::group(['namespace'=>"App\Http\Controllers", 'as'=>"product.", 'prefix'=>"product"], function() {
        Route::get('/', ['as' => "index", 'uses'=>"ProductController@index"]);
        Route::get('create', ['as'=>"create", 'uses'=>"ProductController@create"]);
        Route::post('create', ['uses'=>"ProductController@store"]);
        Route::get('edit/{id?}', ['as' =>"edit", 'uses'=>"ProductController@edit"]);
        Route::post('edit/{id?}', ['uses'=>"ProductController@update"]);
        Route::post('delete/{id?}', ['as'=>"delete", 'uses'=>"ProductController@destroy"]);
    });
});




