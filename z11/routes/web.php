<?php

use App\Http\Controllers\marksController;
use App\Http\Controllers\NekiController;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\PostController;
use App\Models\students;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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
//Route::resource('/pogled','PostController'); 
Route::resource('/pogled', 'studentsController', [
    'only' => [
        'index',
        'create',
        'store',
    ]
]);

Route::delete('/pogled', [studentsController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/pogled',[NekiController::class,'blaz']);
//Route::get('/pogled',[DataCollector::class,'getData']);
Route::get('/pogled',[PostController::class,'index']);




//,[studentsController::class,'getData']

