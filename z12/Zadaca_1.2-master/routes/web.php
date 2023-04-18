<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/product', App\Http\Controllers\StudentsController::class);


Route::get('/product/create', function () {
    return view('create');
})->name('product.create');

Route::get('/product', [App\Http\Controllers\StudentsController::class, 'index']);
Route::resource('/edit', App\Http\Controllers\StudentsController::class);


Route::get('/edit', function () {
    return view('edit');
});
