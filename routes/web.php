<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group that
| contains the "web" middleware group. Now create something great!
|
*/
//uite aici ai rutele, nu ai treaba cu ele
Route::resource('products', ProductController::class);