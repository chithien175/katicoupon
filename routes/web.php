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
| Backend
|--------------------------------------------------------------------------
|
| Route dành cho backend
|
*/
Route::group(['prefix' => 'backend-system'], function () {
    Voyager::routes();
});
/*
| Route Sitemap Generator backend
*/
Route::get('generate-sitemap', 'BackendController@generateSitemap');
/*
| Route Minify CSS backend
*/
Route::get('minify-css', 'BackendController@minifyCss');

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
Route::get('/ma-giam-gia-{merchant}.html', 'FrontendController@merchantFilter')->name('merchant-filter')->where(['merchant' => '[a-zA-Z-0-9].+']);
// Trang chi tiết bài viết
Route::get('/{slug}-{id}.html', 'FrontendController@postDetail')->name('post-detail')->where(['slug' => '[a-zA-Z-0-9]+', 'id' => '[0-9]*']);
// Trang danh sách bài viết theo danh mục
Route::get('/danh-gia/{slug}.html', 'FrontendController@postByCate')->name('post-by-cate')->where(['slug' => '[a-zA-Z-0-9]+']);

/*
|--------------------------------------------------------------------------
| Pages - Frontend
|--------------------------------------------------------------------------
|
| Route các pages frontend
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