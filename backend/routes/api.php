<?php

use Illuminate\Support\Facades\Route;

use App\Web\Controllers\CustomerController;
use App\Web\Controllers\ProductController;
use App\Web\Controllers\CategoryController;
use App\Web\Controllers\ReviewController;

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

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/reviews', [ReviewController::class, 'index']);
