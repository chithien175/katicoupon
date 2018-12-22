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

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
|
| Route dành cho frontend
|
*/

// Trang Chủ
Route::get('/', 'FrontendController@home')->name('home');
// Trang chi tiết nhà cung cấp
Route::get('/ma-giam-gia-phieu-khuyen-mai-coupon-voucher-{merchant}.html', 'FrontendController@merchantFilter')->name('merchant-filter')->where(['merchant' => '[a-zA-Z-0-9].+']);

/*
|--------------------------------------------------------------------------
| Page - Frontend
|--------------------------------------------------------------------------
|
| Route các page frontend
|
*/
// Trang điều khoản sử dụng
Route::get('/dieu-khoan-su-dung.html', function(){
    return view('pages.term');
})->name('term');

// Miễn trừ trách nhiệm
Route::get('/chinh-sach-bao-mat.html', function(){
    return view('pages.privacy-policy');
})->name('privacy-policy');

// Miễn trừ trách nhiệm
Route::get('/mien-tru-trach-nhiem.html', function(){
    return view('pages.responsibility');
})->name('responsibility');

// Trang phiên bản & tính năng
Route::get('/tinh-nang-va-phien-ban.html', function(){
    return view('pages.version');
})->name('version');

/*
|--------------------------------------------------------------------------
| Ajax - Frontend
|--------------------------------------------------------------------------
|
| Route cuộc gọi ajax
|
*/
// Ajax get coupon by promotionID
Route::post('/getCouponByPromotionId', 'AjaxController@getCouponByPromotionId')->name('getCouponByPromotionId');


/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
|
| Route Sitemap Generator backend
|
*/
Route::get('generate-sitemap', 'BackendController@generateSitemap');