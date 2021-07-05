<?php

use Illuminate\Support\Facades\Route;

use App\Web\Controllers\CustomerController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('', function () {
    return "API is running!";
});

Route::get('/customers', [CustomerController::class, 'index']);

Route::get('/products', [ProductsController::class, 'index']);
