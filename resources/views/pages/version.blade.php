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
    <div class="page-content col-lg-9 mb-4 animated fadeInLeft">
        <div class="title"><h1>Tính Năng & Phiên Bản Ứng Dụng</h1></div>
        <div class="article">
            <h2>v1.0.alpha (20/12/2018) Phiên bản thử nghiệm</h2>
            <p>Chức năng:</p>
            <ul>
                <li>Liệt kê danh sách khuyến mãi mới nhất.</li>
                <li>Tìm kiếm khuyến mãi theo nhà cung cấp.</li>
                <li>Giao diện thân thiện với thiết bị di dộng.</li>
            </ul>
        </div>
    </div>
@endsection

@section('advanced-filter')
    @include('partials.advanced-filter')
@endsection

@section('js')

@endsection