<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ImageUploadController;

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

Route::get('/', [FormController::class, 'showForm']);

Route::post('/submit-form', [FormController::class, 'submitForm']);
Route::post('image-upload', [ImageUploadController::class, 'store']);
Route::get('/display/{id}', [FormController::class, 'displayData']);
