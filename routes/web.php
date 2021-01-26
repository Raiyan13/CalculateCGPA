<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ResultInfoController;
use Illuminate\Http\Request;


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

Route::get('start_calculator',[PageController::class, 'calculator']);
Route::get('start_home',[PageController::class, 'home']);
Route::get('show_records',[PageController::class, 'records']);
Route::post('submit_now',[ResultInfoController::class, 'calculate_result']);