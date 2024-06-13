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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/signup', [ApiController::class, 'signup']);
Route::post('/login', [ApiController::class, 'login']);
Route::post('/changePassword', [ApiController::class, 'changePassword']);
Route::post('/updateProfile', [ApiController::class, 'updateProfile']);
Route::post('/forgotPassword', [ApiController::class, 'forgotPassword']);
Route::post('/verifyOtp', [ApiController::class, 'verifyOtp']);
Route::post('/setPassword', [ApiController::class, 'setPassword']);
Route::post('/getUserProfile', [ApiController::class, 'getUserProfile']);
Route::get('/getNews', [ApiController::class, 'getNews']);
Route::get('/getVideos', [ApiController::class, 'getVideos']);