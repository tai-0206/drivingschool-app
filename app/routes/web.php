<?php

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


Route::get('scss', function () {
    return view('for-scss');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/view_reserves', [App\Http\Controllers\DrivingschoolController::class, 'index'])->name('view_reserves');

Route::get('/create_reserve', [App\Http\Controllers\DrivingschoolController::class, 'create'])->name('create_reserve');
