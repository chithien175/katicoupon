@extends('layouts.master')

@section('title', 'Mã Giảm Giá | Phiếu Khuyến Mãi | Coupons | Vouchers Miễn Phí Tại khocoupon.net')
@section('description', 'Ứng dụng không thể thiếu cho những người mua hàng trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers.')
@section('keywords', '')

@section('fb_url', route('home'))
@section('fb_type', '')
@section('fb_title', 'Mã Giảm Giá | Phiếu Khuyến Mãi | Coupons | Vouchers Miễn Phí Tại khocoupon.net')
@section('fb_des', 'Ứng dụng không thể thiếu cho những người mua hàng trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers.')
@section('fb_img', asset('icons/launcher-icon-4x.png'))

@section('css')

@endsection

@section('content')
<div id="homepage" class="col-lg-9 mb-4 animated fadeInLeft">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="promotion-tab" data-toggle="tab" href="#promotion" role="tab" aria-controls="promotion" aria-selected="true"><i class="fas fa-gift mr-2 bell"></i> <span class="color-warning">KHUYẾN MÃI</span> MỚI NHẤT ĐANG DIỄN RA</a>
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