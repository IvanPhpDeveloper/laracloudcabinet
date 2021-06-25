<?php

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


//User routes
//Route::prefix('user')->group(function () {
//    Route::get('home', [App\Http\Controllers\user\HomeController::class, 'index']);
//    Route::get('post/{post}', [App\Http\Controllers\user\PostController::class, 'post'])->name('post');
//
////    Route::get('post/tag/{tag}',\App\Http\Controllers\user\HomeController::class,'tag')->name('tag');
////    Route::get('post/category/{category}',\App\Http\Controllers\user\HomeController::class,'category')->name('category');


//});


//Admin routes
Route::prefix('admin')->group(function () {
//    Route::get('home',[\App\Http\Controllers\user\HomeController::class,'index']);
    //Post Route
    Route::resource('post', \App\Http\Controllers\admin\PostController::class);
    //Users route
    Route::resource('user', \App\Http\Controllers\admin\UserConctroller::class);
    //Category Route
    Route::resource('category', \App\Http\Controllers\admin\CategoryController::class);
    //Tag Route
    Route::resource('tag', \App\Http\Controllers\admin\TagController::class);

    //Registration for users
    Route::get('regpage', [\App\Http\Controllers\user\RegistrationPageController::class,'index'])->name('addchildren');

    //Payment for parents
    Route::get('payment', [\App\Http\Controllers\user\PaymentController::class,'index'])->name('paymentforchild');

    //SHow payment for admin
    Route::get('admin-payment', [\App\Http\Controllers\user\PaymentManagerController::class,'index'])->name('admin-pay');

    //Responce Controller
    Route::any('admin-payment-responce', [\App\Http\Controllers\user\PaymentResponceController::class,'index']);


    //Category_faq route
    Route::resource('category_faq', \App\Http\Controllers\admin_faq\CategoryController::class);

//    //Question route
    Route::resource('question', \App\Http\Controllers\admin_faq\QuestionController::class);

    Route::get('faq', [\App\Http\Controllers\user\FaqController::class, 'index'])->name('faq');
    Route::get('faqc', [\App\Http\Controllers\user\FaqQuestController::class, 'question'])->name('faqQuestion');

    Route::get('home', [App\Http\Controllers\user\HomeController::class, 'index'])->name('blog');
    Route::get('post/{post}', [App\Http\Controllers\user\PostController::class, 'post'])->name('post');

});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
