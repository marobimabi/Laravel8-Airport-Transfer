<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


/* --------------------------------- Admin-----------------------------*/

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_home');

    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::get('category/update', [\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'delete'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');


});

Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin_home')->middleware('auth');
Route::get('/admin/login', [App\Http\Controllers\Admin\AdminController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\AdminController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [App\Http\Controllers\Admin\AdminController::class,'logout'])->name('admin_logout');

/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home.index');
});
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


