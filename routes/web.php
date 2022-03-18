<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web as Web;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('role:admin')->prefix('admin')->group(function() {
    Route::get('/homepage', [Web\AdminController::class, 'index'])->name('adminHomepage');
});


// Route::middleware('role:admin')->get('/dashboard', function() {
//     return 'Dashboard';
// })->name('dashboard');

// Route::get('/dashboard2', function () {
//     return view('layouts.app2');
// });
