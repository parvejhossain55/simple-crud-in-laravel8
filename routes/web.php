<?php

use App\Http\Controllers\StudentController;
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


Route::get('/', [StudentController::class, 'index']);

Route::get('addstudent', [StudentController::class, 'show']);

Route::post('addstudent', [StudentController::class, 'create']);

Route::get('student/edit/{id}', [StudentController::class, 'edit']);

Route::post('student/update/{id}', [StudentController::class, 'update']);

Route::get('student/delete/{id}', [StudentController::class, 'delete']);