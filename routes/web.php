<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'App\Http\Controllers\Admin', 'prefix'=>'admin'], function (){
    Route::get('/', 'Home\IndexController')->name('admin.home.index');

    Route::group(['namespace'=>'Post', 'prefix'=>'posts'], function (){
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
    });

    Route::group(['namespace'=>'User', 'prefix'=>'users'], function (){
        Route::get('/', 'IndexController')->name('admin.user.index');
    });

    Route::group(['namespace'=>'Category', 'prefix'=>'categories'], function (){
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DestroyController')->name('admin.category.delete');
    });

    Route::group(['namespace'=>'Tag', 'prefix'=>'tags'], function (){
        Route::get('/', 'IndexController')->name('admin.tag.index');
    });
});
