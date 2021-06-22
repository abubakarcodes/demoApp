<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('collections' , [CategoriesController::class , 'index']);
Route::get('/collections/{category}' , [CategoriesController::class , 'show'])->name('categories.show');
Route::get('/products' , [ProductsController::class , 'index'])->name('products');
Route::get('/products/{product}' , [ProductsController::class , 'show'])->name('products.show');
