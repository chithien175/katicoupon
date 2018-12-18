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

Route::get('/', 'FrontendController@home')->name('home');
// Route::post('/merchant/filter', 'FrontendController@postMerchantFilter')->name('post-merchant-filter');
Route::get('/ma-giam-gia-phieu-khuyen-mai-coupon-voucher-{merchant}.html', 'FrontendController@merchantFilter')->name('merchant-filter');