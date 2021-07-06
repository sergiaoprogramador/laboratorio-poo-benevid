<?php

use Illuminate\Support\Facades\Route;

use App\Web\Controllers\CustomerController;
use App\Web\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('', function () {
    return "API is running!";
});

Route::get('/customers', [CustomerController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
