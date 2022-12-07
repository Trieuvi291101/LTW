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
Route::get('product', ['as'=>'home', 'uses'=>'ProductController@index']);
Route::get('productDetail/{id}', ['as'=>'prodDetail', 'uses'=>'ProductController@getProductDetail']);
Route::get('addproduct', ['as'=>'prodAdd', 'uses'=>'ProductController@addProduct']);
Route::post('', ['as'=>'insert', 'uses'=>'ProductController@insertProduct']);
Route::get('addproduct/{id}', ['as'=>'prodDel', 'uses'=>'ProductController@deletePro']);
Route::get('EditProduct/{id}', ['as'=>'EditProduct', 'uses'=>'ProductController@editPro']);
Route::post('editPro2', ['as'=>'editPro2', 'uses'=>'ProductController@editPro2']);
Route::get('Stars', ['as'=>'Stars', 'uses'=>'ProductController@Stars']);