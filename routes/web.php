<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

#Home

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('/references', [App\Http\Controllers\HomeController::class, 'references'])->name('references');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/service', [App\Http\Controllers\HomeController::class, 'service'])->name('service');
Route::post('/sendmessage', [App\Http\Controllers\HomeController::class, 'sendmessage'])->name('sendmessage');
Route::post('/makeresearch', [App\Http\Controllers\HomeController::class, 'makeresearch'])->name('makeresearch');
Route::get('/placelist/{search}', [App\Http\Controllers\HomeController::class,'placelist'])->name('placelist');

Route::get('/categoryproducts/{id}/{slug}', [App\Http\Controllers\HomeController::class, 'categoryproducts'])->name('categoryproducts');
Route::get('/transfer/{id}/{slug}', [App\Http\Controllers\HomeController::class, 'transfer'])->name('transfer');

/* --------------------------------- Admin-----------------------------*/
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::middleware('admin')->group(function (){

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
    #transfer
    Route::prefix('user')->group(function (){
        Route::get('', [\App\Http\Controllers\Admin\UserController::class,'index'])->name('admin_user');
        Route::get('create', [\App\Http\Controllers\Admin\UserController::class,'create'])->name('admin_user_add');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class,'edit'])->name('admin_user_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class,'update'])->name('admin_user_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class,'destroy'])->name('admin_user_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class,'show'])->name('admin_user_show');
        Route::post('store', [\App\Http\Controllers\Admin\UserController::class,'store'])->name('admin_user_store');
        Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class,'user_roles'])->name('admin_user_roles');
        Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class,'user_role_store'])->name('admin_user_role_add');
        Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class,'user_role_delete'])->name('admin_user_role_delete');


    });

    #location
    Route::prefix('location')->group(function (){
        Route::get('', [\App\Http\Controllers\Admin\LocationController::class,'index'])->name('admin_location');
        Route::get('create', [\App\Http\Controllers\Admin\LocationController::class,'create'])->name('admin_location_add');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\LocationController::class,'edit'])->name('admin_location_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\LocationController::class,'update'])->name('admin_location_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\LocationController::class,'destroy'])->name('admin_location_delete');
        Route::get('show', [\App\Http\Controllers\Admin\LocationController::class,'show'])->name('admin_category_show');
        Route::post('store', [\App\Http\Controllers\Admin\LocationController::class,'store'])->name('admin_location_store');

    });
    #message
    Route::prefix('messages')->group(function (){
        Route::get('', [\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');


    });

    #Image
    Route::prefix('image')->group(function (){

        Route::get('create/{transfer_id}', [\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::get('delete/{id}/{transfer_id}', [\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
        Route::post('store/{transfer_id}', [\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
 });
    #Review
    Route::prefix('review')->group(function (){
        Route::get('', [\App\Http\Controllers\Admin\ReviewController::class,'index'])->name('admin_review');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class,'update'])->name('admin_review_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class,'destroy'])->name('admin_review_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ReviewController::class,'show'])->name('admin_review_show');


    });
#Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');
#faq
    Route::prefix('faq')->group(function (){
        Route::get('', [\App\Http\Controllers\Admin\FaqController::class,'index'])->name('admin_faq');
        Route::get('create', [\App\Http\Controllers\Admin\FaqController::class,'create'])->name('admin_faq_add');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class,'edit'])->name('admin_faq_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class,'update'])->name('admin_faq_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class,'destroy'])->name('admin_faq_delete');
        Route::get('show', [\App\Http\Controllers\Admin\FaqController::class,'show'])->name('admin_faq_show');
        Route::post('store', [\App\Http\Controllers\Admin\FaqController::class,'store'])->name('admin_faq_store');
});

#rezervation
    Route::prefix('rezervation')->group(function (){

        Route::get('/', [\App\Http\Controllers\Admin\RezervationController::class,'index'])->name('admin_rezervation');
        Route::get('create', [\App\Http\Controllers\Admin\RezervationController::class,'create'])->name('admin_rezervation_add');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\RezervationController::class,'edit'])->name('admin_rezervation_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\RezervationController::class,'update'])->name('admin_rezervation_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\RezervationController::class,'destroy'])->name('admin_rezervation_delete');
        Route::get('show/{from_loc}/{to_loc}/{id}', [\App\Http\Controllers\Admin\RezervationController::class,'show'])->name('admin_rezervation_show');
        Route::post('store', [\App\Http\Controllers\Admin\RezervationController::class,'store'])->name('admin_rezervation_store');


    });
    }); //admın
});//auth


#user
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');

    Route::prefix('transfer')->group(function (){
        Route::get('', [\App\Http\Controllers\TransferController::class,'index'])->name('user_transfer');
        Route::get('create', [\App\Http\Controllers\TransferController::class,'create'])->name('user_transfer_add');
        Route::get('edit/{id}', [\App\Http\Controllers\TransferController::class,'edit'])->name('user_transfer_edit');
        Route::post('update/{id}', [\App\Http\Controllers\TransferController::class,'update'])->name('user_transfer_update');
        Route::get('delete/{id}', [\App\Http\Controllers\TransferController::class,'destroy'])->name('user_transfer_delete');
        Route::get('show', [\App\Http\Controllers\TransferController::class,'show'])->name('user_category_show');
        Route::post('store', [\App\Http\Controllers\TransferController::class,'store'])->name('user_transfer_store');


    });
    #Review
    Route::prefix('review')->group(function (){
        Route::get('', [\App\Http\Controllers\ReviewController::class,'index'])->name('user_review');
        Route::post('update/{id}', [\App\Http\Admin\ReviewController::class,'update'])->name('user_review_update');
        Route::get('delete/{id}', [\App\Http\Controllers\ReviewController::class,'destroy'])->name('user_review_delete');
        Route::get('show', [\App\Http\Controllers\ReviewController::class,'show'])->name('user_review_show');

    });
#rezervation
    Route::prefix('rezervation')->group(function (){

        Route::get('', [\App\Http\Controllers\RezervationController::class,'index'])->name('user_rezervation');
        Route::get('create', [\App\Http\Controllers\RezervationController::class,'create'])->name('user_rezervation_add');
        Route::get('edit/{id}', [\App\Http\Controllers\RezervationController::class,'edit'])->name('user_rezervation_edit');
        Route::post('update/{id}', [\App\Http\Controllers\RezervationController::class,'update'])->name('user_rezervation_update');
        Route::get('delete/{id}', [\App\Http\Controllers\RezervationController::class,'destroy'])->name('user_rezervation_delete');
        Route::get('show/{from_loc}/{to_loc}/{id}', [\App\Http\Controllers\RezervationController::class,'show'])->name('user_rezervation_show');
        Route::post('store/{id}', [\App\Http\Controllers\RezervationController::class,'store'])->name('user_rezervation_store');


    });


    #Image
    Route::prefix('image')->group(function (){

        Route::get('create/{transfer_id}', [\App\Http\Controllers\ImageController::class,'create'])->name('user_image_add');
        Route::get('delete/{id}/{transfer_id}', [\App\Http\Controllers\ImageController::class,'destroy'])->name('user_image_delete');
        Route::get('show', [\App\Http\Controllers\ImageController::class,'show'])->name('user_image_show');
        Route::post('store/{transfer_id}', [\App\Http\Controllers\ImageController::class,'store'])->name('user_image_store');
    });

});




//<!--       --------------------------------------------------------------      -->  //

Route::get('/admin/login', [App\Http\Controllers\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck', [App\Http\Controllers\HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout', [App\Http\Controllers\HomeController::class,'logout'])->name('logout');
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


