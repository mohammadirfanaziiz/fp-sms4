<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(BarangController::class)->prefix('databarang')->group(function () {
        Route::get('', 'index')->name('databarang');
        Route::get('create', 'create')->name('databarang.create');
        Route::post('store', 'store')->name('databarang.store');
        Route::get('show/{id}', 'show')->name('databarang.show');
        Route::get('edit/{id}', 'edit')->name('databarang.edit');
        Route::put('edit/{id}', 'update')->name('databarang.update');
        Route::delete('destroy/{id}', 'destroy')->name('databarang.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
