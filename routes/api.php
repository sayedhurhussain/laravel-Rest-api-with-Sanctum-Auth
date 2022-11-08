<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Models\Product;
use App\Http\Controllers\ProductController;

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

// Route::get('/products', function(){
    // return 'products';
    // return Product::all();
// });

// Route::post('/products', function(){
//     return Product::create([
//         'name' => 'Product One',
//         'slug' => 'product-one',
//         'description' => 'This is product one',
//         'price' => '99.99',
//     ]); 
// });


// Route::resource('/products', ProductController::class);

// * Public routes
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/search/{name} ', [ProductController::class, 'search']);


// ~ Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductController::class, 'store']);
    Route::post('/products/{id}', [ProductController::class, 'update']);
    Route::post('/products/{id}', [ProductController::class, 'destroy']);
});


// Route::get('/index', [UserController::class, 'index']);
// Route::get('/show/{id}', [UserController::class, 'show']);




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });




