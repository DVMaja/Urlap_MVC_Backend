<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//FORM-> Író lesz
Route::apiResource('/api/forms', FormController::class);

Route::get('/forms', [FormController::class, 'index']);
Route::post('/forms', [FormController::class, 'store']);
Route::put('/forms/{id}', [FormController::class, 'update']);
Route::delete('/forms/{id}', [FormController::class, 'destroy']);

//BOOK
Route::apiResource('/api/books', FormController::class);

Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
Route::put('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);
