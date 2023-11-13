<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/forms', [FormController::class, 'index']);
Route::post('/forms', [FormController::class, 'store']);
/* Route::put('/writers/{id}', [WriterController::class, 'update']);
Route::delete('/writers/{id}', [WriterController::class, 'destroy']); */