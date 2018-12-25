@extends('layouts.master')

@section('title', 'Mã giảm giá, phiếu kKhuyến mãi miễn phí tại khocoupon.net')
@section('description', 'Ứng dụng không thể thiếu cho những người mua hàng trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers.')
@section('keywords', '')

@section('fb_url', route('home'))
@section('fb_type', 'website')
@section('fb_title', 'Mã giảm giá, phiếu kKhuyến mãi miễn phí tại khocoupon.net')
@section('fb_des', 'Ứng dụng không thể thiếu cho những người mua hàng trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers.')
@section('fb_img', asset('icons/launcher-icon-4x.png'))

@section('css')

@endsection

@section('content')
<div id="homepage" class="col-lg-9 mb-4 animated fadeInLeft">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <h1>
                <a class="nav-link active" id="promotion-tab" data-toggle="tab" href="#promotion" role="tab" aria-controls="promotion" aria-selected="true"><i class="fas fa-gift mr-2 bell"></i> <span class="color-warning">KHUYẾN MÃI</span> MỚI NHẤT</a>
            </h1>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="promotion" role="tabpanel" aria-labelledby="promotion-tab">
            @php
                $promotions = getAllPromotions(NULL, 15);
            @endphp

            @include('partials.promotion-list')
        </div>
    </div>
</div>
@endsection

@section('advanced-filter')
    @include('partials.advanced-filter')
@endsection

@section('js')

@endsection