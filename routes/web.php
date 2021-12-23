<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

#Home

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/fag', [App\Http\Controllers\HomeController::class, 'fag'])->name('fag');
Route::get('/references', [App\Http\Controllers\HomeController::class, 'references'])->name('references');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/service', [App\Http\Controllers\HomeController::class, 'service'])->name('service');



/* --------------------------------- Admin-----------------------------*/

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_home');
    #category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
#transfer
    Route::prefix('transfer')->group(function (){
        Route::get('', [\App\Http\Controllers\Admin\TransferController::class,'index'])->name('admin_transfer');
        Route::get('create', [\App\Http\Controllers\Admin\TransferController::class,'create'])->name('admin_transfer_add');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\TransferController::class,'edit'])->name('admin_transfer_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\TransferController::class,'update'])->name('admin_transfer_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\TransferController::class,'destroy'])->name('admin_transfer_delete');
        Route::get('show', [\App\Http\Controllers\Admin\TransferController::class,'show'])->name('admin_category_show');
        Route::post('store', [\App\Http\Controllers\Admin\TransferController::class,'store'])->name('admin_transfer_store');


    });
    #Image
    Route::prefix('image')->group(function (){

        Route::get('create/{transfer_id}', [\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::get('delete/{id}/{transfer_id}', [\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
        Route::post('store/{transfer_id}', [\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
 });
#Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');


});
#user
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('myprofile');

});
//<!--       --------------------------------------------------------------      -->  //
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin_home')->middleware('auth');
Route::get('/admin/login', [App\Http\Controllers\Admin\AdminController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\AdminController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout', [App\Http\Controllers\Admin\AdminController::class,'logout'])->name('logout');
Route::get('/logout', [App\Http\Controllers\HomeController::class,'logout'])->name('_logout');




/*
Route::get('/', function () {
    return view('home.index');
});


Route::get('/', function () {
    return view('welcome');
});
*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


