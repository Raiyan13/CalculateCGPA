<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ResultInfoController;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Project CalculateCGPA
|--------------------------------------------------------------------------
| Made by S.m. Tahmin Kabir Raiyan;
| ID: 181-115-006; Batch 44th; Section: A;
| Metropolitan University, Sylhet
| Web Programming Course Project
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('start_calculator',[PageController::class, 'calculator']);
Route::get('start_home',[PageController::class, 'home']);
Route::get('show_about',[PageController::class, 'about']);
Route::get('show_records',[ResultInfoController::class, 'show']);
Route::get('update_result/{id}',[ResultInfoController::class, 'edit']);
Route::get('delete_result/{id}',[ResultInfoController::class, 'destroy']);
Route::post('show_result',[ResultInfoController::class, 'calculate_result']);
Route::post('save_result',[ResultInfoController::class, 'store']);
Route::patch('save_update/{id}',[ResultInfoController::class, 'update']);
