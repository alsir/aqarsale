<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Middleware\RedirectIfNotUser;
use App\Http\Middleware\RedirectIfNotAdmin;
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
Route::group(['middleware' => ['auth', RedirectIfNotUser::class]],function(){
    Route::get('/map', [FrontendController::class, 'map']);
    Route::get('/profile', [FrontendController::class, 'profile']);
    Route::get('/properties', [FrontendController::class, 'properties']);

});
Route::get('/', [FrontendController::class, 'index']);
Route::get('/details/{id}', [FrontendController::class,'details']);
Route::get('change_language/{lang}' , [LanguageController::class , 'change']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->group(['middleware' => ['auth:admin', RedirectIfNotAdmin::class]],function () {

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
