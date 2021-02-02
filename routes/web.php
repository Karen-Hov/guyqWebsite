<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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
Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale,\Config::get('app.locales'))) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});



Route::get('/', function () {
    return view('welcome');
});


Route::prefix('my_admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class,'index']);
    Route::resources([
        'about_us' => AboutUsController::class,
        'features' => FeaturesController::class,
        'partners' => PartnersController::class,
        'products' => ProductController::class,
        'pricing' => PricingController::class,
        'faq' => FaqController::class,
    ]);




    Route::get('messages/contact', [MessageController::class, 'contact'])->name('messages.contact');
    Route::get('messages/partners', [MessageController::class, 'partners'])->name('messages.partners');
    Route::get('messages/request', [MessageController::class, 'request'])->name('messages.request');
    Route::delete('messages/{id}', [MessageController::class, 'destroy'])->name('messages.delete');

    Route::get('subscribe/show', [SubscribeController::class,'show']);
    Route::post('subscribe/add/update', [SubscribeController::class,'add']);
    Route::delete('subscribe/updating/{id}', [SubscribeController::class,'deleteUpdate']);
////
    Route::get('subscribe/send',  [SubscribeController::class,'send']);
//    Route::delete('subscribe/{id}', 'Admin\SubscribeController@delete');

//    Route::get('settings', 'Admin\AdminController@settings');
//    Route::get('check-pwd', 'Admin\AdminController@chkPassword');
//    Route::get('check-pwd', 'Admin\AdminController@chkPassword');
//    Route::match(['get', 'post'], 'update-pwd', 'Admin\AdminController@updatePassword');

//    Route::resource('user', 'Admin\UserController');
//    Route::resource('faq', 'Admin\FaqController');

});
Route::get('/logout', [HomeController::class,'logout']);
Auth::routes(['register' => false]);
