@extends('layouts.master')

@section('css')

@endsection

@section('content')
<div id="merchant" class="col-lg-9">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="promotion-tab" data-toggle="tab" href="#promotion" role="tab" aria-controls="promotion" aria-selected="true"><i class="fab fa-hotjar"></i> SIÊU KHUYẾN MÃI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="coupon-tab" data-toggle="tab" href="#coupon" role="tab" aria-controls="coupon" aria-selected="false"><i class="fas fa-tag"></i> GIẢM GIÁ KHỦNG</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="promotion" role="tabpanel" aria-labelledby="promotion-tab">
            @php
                $promotions = getAllPromotions($merchant, 0);
            @endphp

            @include('partials.promotion-list')
        </div>
        <div class="tab-pane fade" id="coupon" role="tabpanel" aria-labelledby="coupon-tab">
            @php
                $coupons = getAllPromotions($merchant, 1);
            @endphp

            @include('partials.coupon-list')
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection