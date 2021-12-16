<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
/* Admin---------------------*/
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


