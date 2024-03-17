<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\PhoneVerificationController;

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
Route::get('/', [FrontendController::class, 'index']);
Route::get('/map', [FrontendController::class, 'map']);
Route::get('/details/{id}', [FrontendController::class,'details']);
Route::get('change_language/{lang}' , [LanguageController::class , 'change']);
Route::get('/details', function () {
    return view('frontend.details');
})->name('details');
Route::get('/login', function () {
    return view('frontend.auth.login');
})->name('login');
Route::get('/register', function () {
    return view('frontend.auth.signup');
})->name('signup');
Route::get('/profile', function () {
    return view('frontend.customer.profile');
})->name('pro');
Route::get('/customer', function () {
    return view('frontend.customer.properties');
})->name('property');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->middleware(['auth','web'])->group(function () {

    Route::get('/edit_profile',[ProfileController::class,'edit_profile']);
    Route::post('/update_profile',[ProfileController::class,'update_profile']);
    Route::post('/update_password',[ProfileController::class,'update_password']);
    Route::resource('/category' ,CategoryController::class );
    Route::resource('/area' ,AreaController::class );
    Route::resource('/customer' ,CustomerController::class );
    Route::resource('/property' ,PropertyController::class );
    Route::resource('/image' ,ImageController::class );
    Route::resource('/users',UserController::class);


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});
Route::post('send-verification-code', [PhoneVerificationController::class, 'sendVerificationCode']);
Route::post('verify-phone-number', [PhoneVerificationController::class, 'verifyPhoneNumber']);
require __DIR__ . '/auth.php';
