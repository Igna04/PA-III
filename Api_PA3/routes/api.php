<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    
Route::get('/data-tanaman', [BlogController::class, 'index']);
Route::get('/tanaman-edit/{id}', [BlogController::class, 'edit']);
Route::post('/add-tanaman', [BlogController::class, 'store']);
Route::put('/edit-tanaman/{id}', [BlogController::class, 'update']);
Route::delete('/hapus-tanaman', [BlogController::class, 'delete']);