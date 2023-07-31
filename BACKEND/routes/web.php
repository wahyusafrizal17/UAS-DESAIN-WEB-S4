<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

Route::get('/', 'DashboardController@index')->name('dashboard');

Auth::routes(['register' => false]);

// Products
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products{id}/gallery', 'ProductController@gallery')->name('products.gallery');
Route::get('/product/create', 'ProductController@create')->name('products.create');
Route::post('/product', 'ProductController@store')->name('products.store');
Route::get('/products/edit/{id}','ProductController@edit')->name('products.edit');
Route::put('/products/update/{id}', 'ProductController@update')->name('products.update');
Route::delete('/products/delete/{id}', 'ProductController@destroy')->name('products.destroy');

// Product Gallery
Route::get('/products-galleries', 'ProductGalleryController@index')->name('products-galleries.index');
Route::get('/products/create', 'ProductGalleryController@create')->name('products-galleries.create');
Route::post('/products', 'ProductGalleryController@store')->name('products-galleries.store');
Route::delete('/products-galleries/delete/{id}', 'ProductGalleryController@destroy')->name('products-galleries.destroy');

// Transactions
Route::get('/transactions', 'TransactionController@index')->name('transactions.index');
// Route::get('/transactions/create', 'TransactionController@create')->name('transactions.create');
// Route::post('/transactions', 'TransactionController@store')->name('transactions.store');
Route::get('transactions/{id}', 'TransactionController@show')->name('transactions.show');
Route::get('/transactions/edit/{id}','TransactionController@edit')->name('transactions.edit');
Route::put('/transactions/update/{id}', 'TransactionController@update')->name('transactions.update');
Route::get('/transactions/{id}/set-status', 'TransactionController@setStatus')->name('transactions.status');
Route::delete('/transactions/delete/{id}', 'TransactionController@destroy')->name('transactions.destroy');




