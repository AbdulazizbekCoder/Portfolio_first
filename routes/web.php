<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;


Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/adminlogin', [AuthController::class, 'login'])->name('login');

Route::post('loginStore', [AuthController::class, 'loginStore'])->name('loginStore');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function (){
    Route::get('dashboard', [AdminController::class, 'dashboard']);
});
