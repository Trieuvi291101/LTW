<?php

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

Route::get('/','ProductController@index');
Route::get('product', ['as'=>'index', 'uses'=>'ProductController@index']);
Route::get('productDetail/{id}', ['as'=>'prodDetail', 'uses'=>'ProductController@getProductDetail']);
Route::get('addproduct', ['as'=>'prodAdd', 'uses'=>'ProductController@addProduct']);
Route::post('', ['as'=>'insert', 'uses'=>'ProductController@insertProduct']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', ['as'=>'indexUser', 'uses'=>'UserController@indexUser']);
Route::get('/userDetail/{id}', ['as'=>'uDetail', 'uses'=>'UserController@getUserDetail']);

Route::get('/productDetail/{id}/{UserId}', ['as'=>'addtocart', 'uses'=>'CartController@addProductToCart']);
Route::get('/productDetail/remove/{id}/{UserId}', ['as'=>'removeproduct', 'uses'=>'CartController@removeProduct']);