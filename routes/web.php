<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DataAnggota\KantorPusatController;


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
    return view('home', ['title' => 'Home']);
})->name('home')->middleware('auth');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('dashboard');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::view('/dashboard','Dashboard')->middleware('auth');

Route::get('/dashboard/account', function () {
    return view('account');
})->middleware('auth');
Route::get('/dashboard/DataAnggota', function () {
    return view('DataAnggota')->middleware('auth');
});

// Route Data Anggota
// Route::get('/dashboard/DataAnggota/KantorPusat', function () {
//     return view('DataAnggota/KantorPusat');
// });
Route::get('/dashboard/DataAnggota/KantorPusat', [KantorPusatController::class, 'index'])->name('index')->middleware('auth');
Route::get('/loadContent/{No_CIF}', [KantorPusatController::class, 'loadContent'])->middleware('auth');
Route::get('/upload-foto', [KantorPusatController::class, 'create'])->name('create')->middleware('auth');
Route::post('/store', [KantorPusatController::class, 'store'])->name('store');


