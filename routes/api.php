<?php

use App\Http\Controllers\Api\StudentsController;
use App\Http\Controllers\Api\SubjectsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//STUDENTS
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students({student}', [StudentsController::class, 'getSignleStudent']);
Route::post('/students', [StudentsController::class, 'store']);
Route::put('/students/{student}', [StudentsController::class, 'update']);
Route::delete('/students/{student}', [StudentsController::class, 'destroy']);

//SUBJECTS
Route::get('subjects', [SubjectsController::class, 'index']);
Route::get('subjects', [SubjectsController::class, 'getSingleSubject']);
Route::post('subjects', [SubjectsController::class, 'store']);
Route::put('subjects', [SubjectsController::class, 'update']);
Route::delete('subjects', [SubjectsController::class, 'destroy']);