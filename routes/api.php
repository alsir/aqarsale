<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/images', [ApiController::class ,'getImages']);
Route::post('/images', [ApiController::class,'storeImage']);
Route::get('/images/{id}', [ApiController::class,'getImage']);
Route::put('/images/{id}', [ApiController::class,'updateImage']);
Route::delete('/images/{id}', [ApiController::class,'deleteImage']);
Route::get('/properties', [ApiController::class,'getProperties']);
Route::post('/properties', [ApiController::class,'storeProperty']);
Route::get('/properties/{id}', [ApiController::class,'getProperty']);
Route::put('/properties/{id}', [ApiController::class,'updateProperty']);
Route::delete('/properties/{id}',[ApiController::class,'deleteProperty']);
Route::get('/customers', [ApiController::class,'getCustomers']);
Route::post('/customers', [ApiController::class,'storeCustomer']);
Route::get('/customers/{id}', [ApiController::class,'getCustomer']);
Route::put('/customers/{id}', [ApiController::class,'updateCustomer']);
Route::put('/categories',[ApiController::class,'getCategories']);
Route::put('/areas', [ApiController::class,'getAreas']);
