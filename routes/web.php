<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\controllers\NilaiController;

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




Route::get('/',[NilaiController::class,'index']);
Route::get('/nilai/create',[NilaiController::class,'create']);
Route::post('/nilai/store',[NilaiController::class,'store']);
Route::get('/nilai/{id}/edit',[NilaiController::class,'edit']);
Route::put('/nilai/{id}',[NilaiController::class,'update']);
Route::delete('/nilai/{id}',[NilaiController::class,'destroy']);

