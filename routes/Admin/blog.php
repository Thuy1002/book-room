<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\TypeController;
use App\Models\blog;
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

Route::prefix('/admin/blog')->name('admin.posts.')->middleware(['check-user','check-admin'])->controller(BlogController::class)->group( function(){
     Route::get('blog-list','index')->name('list');
     Route::get('create-blog','add')->name('add');
     Route::get('fillstt','fillersStt')->name('fillersStt');
     Route::post('store','store')->name('store');
     Route::post('change/{id}','updateStatus')->name('change');
   //  Route::match( ['get', 'post'], 'update/{id}','update')->name('update');
     Route::get('delete/{id}','delet')->name('delete');
});

