<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api as Api;

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


Route::post('register', [Api\UserController::class, 'register']);
Route::post('login', [Api\UserController::class, 'login']);
Route::get('book', [Api\BookController::class, 'book']);

Route::get('bookall', [Api\BookController::class, 'bookAuth'])->middleware('jwt.verify');
Route::get('user', [Api\BookController::class, 'getAuthenticatedUser'])->middleware('jwt.verify');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
