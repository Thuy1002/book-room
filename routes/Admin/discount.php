<?php

use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\TypeController;
use App\Models\Discount;
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

Route::prefix('/admin/discount')->name('admin.discount.')->middleware(['check-user','check-admin'])->controller(DiscountController::class)->group( function(){
     Route::get('discount-list','index')->name('list');
     Route::get('create-discount','add')->name('add');
     Route::get('fillstt','fillersStt')->name('fillersStt');
     Route::post('store','store')->name('store');
     Route::post('change/{id}','Changestt')->name('change');
     Route::match( ['get', 'post'], 'edit-discount/{id}','update')->name('update');
     Route::get('delete/{id}','delet')->name('delete');
     Route::post('dellAll','dellAll')->name('dellAll');
});

