<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('/post/merchant', 'FrontendController@postMerchant')->name('post-merchant');
Route::get('/', 'FrontendController@home');

// Route::get('/ma-giam-gia-{merchant}.html', 'FrontendController@merchant')->name('get-merchant');