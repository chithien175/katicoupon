@extends('layouts.master')

@section('title', 'Tính Năng & Phiên Bản Ứng Dụng Tại khocoupon.net')
@section('description', 'Ứng dụng không thể thiếu cho những người mua hàng trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers.')
@section('keywords', '')

@section('fb_url', route('version'))
@section('fb_type', '')
@section('fb_title', 'Tính Năng & Phiên Bản Ứng Dụng Tại khocoupon.net')
@section('fb_des', 'Ứng dụng không thể thiếu cho những người mua hàng trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers.')
@section('fb_img', asset('icons/launcher-icon-4x.png'))

@section('css')

@endsection

@section('content')
<div id="versionpage" class="col-lg-9 mb-4 animated fadeInLeft">
    <div class="page-content">
        <div class="title"><h1>Tính Năng & Phiên Bản Ứng Dụng</h1></div>
        <div class="article">
            <h2>v1.0.alpha - Phiên bản thử nghiệm</h2>
            <p>Phiên bản thử nghiệm</p>
        </div>
    </div>
</div>
@endsection

@section('advanced-filter')
    @include('partials.advanced-filter')
@endsection

@section('js')

@endsection