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

// Trang Chủ
Route::get('/', 'FrontendController@home')->name('home');
// Trang chi tiết nhà cung cấp
Route::get('/ma-giam-gia-phieu-khuyen-mai-coupon-voucher-{merchant}.html', 'FrontendController@merchantFilter')->name('merchant-filter')->where(['merchant' => '[a-zA-Z-0-9].+']);

// Trang thỏa thuận sử dụng
Route::get('/dieu-khoan-su-dung.html', function(){
    return view('pages.term');
})->name('term');

// Ajax get coupon by promotionID
Route::post('/getCouponByPromotionId', 'AjaxController@getCouponByPromotionId')->name('getCouponByPromotionId');


// Route::get('/get-random.html', function (){
//     return view('customs.get-random');
// });