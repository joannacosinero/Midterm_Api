<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\User;
use App\Product;
use App\OrderItem;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
|
*/

Route::get('users/', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users/', 'UserController@store');
Route::patch('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@destroy');
Route::get('users/{user}/products/orderitems', 'UserController@byUser');


Route::get('products/', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::post('products/', 'ProductController@store');
Route::patch('products/{product}', 'ProductController@update');
Route::delete('products/{product}', 'ProductController@destroy');


Route::get('orderitems/', 'OrderItemController@index');
Route::get('orderitems/{orderitems}', 'OrderItemController@show');
Route::post('orderitems/', 'OrderItemController@store');
Route::patch('orderitems/{orderitems}', 'OrderItemController@update');
Route::delete('orderitems/{orderitems}', 'OrderItemController@destroy');



