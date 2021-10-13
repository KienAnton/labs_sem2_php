<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/demo', [ProductController::class, 'demo']);
Route::get('/product/demo1', [ProductController::class, 'demo1']);
Route::get('/product/demo2', [ProductController::class, 'demo2']);
Route::get('/product/demo3', [ProductController::class, 'demo3']);
Route::get('/product/demo4', [ProductController::class, 'demo4']);
