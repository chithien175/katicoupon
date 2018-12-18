@extends('layouts.master')

@section('css')

@endsection

@section('content')
<div id="homepage" class="col-lg-9">
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
                    $promotions = getAllPromotions();
                @endphp
                <div class="row">
                    @foreach($promotions['data'] as $promotion)
                        <div class="col-lg-12">
                            <div class="item-group">
                                <div class="float-right info">
                                    @php
                                        $current = Carbon\Carbon::now();
                                        $future = $promotion['end_time'];
                                    @endphp
                                    <!-- <div class="recommended"><i class="icon-check far fa-check-square"></i> Đã xác nhận</div> -->
                                    <div class="end_time"><i class="icon-clock far fa-clock"></i> Còn {{ $current->diffInDays($future) + 1 }} ngày</div>
                                </div>
                                <div class="title">
                                    <h5>
                                        <a href="#" class="merchant">[{{ $promotion['merchant'] }}]</a>
                                    </h5>
                                    <h5 class="">
                                        <a href="{{ $promotion['aff_link'] }}" class="name" target="_blank">{{ $promotion['name'] }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
        </div>
        <div class="tab-pane fade" id="coupon" role="tabpanel" aria-labelledby="coupon-tab">
                @php
                    $coupons = getAllCoupons();
                @endphp
                @foreach($coupons['data'] as $coupon)
                    <div class="col-lg-12 item-group">
                        <h5 class="title">
                            <a href="#" class="merchant">[{{ $coupon['merchant'] }}]</a><a href="{{ $coupon['aff_link'] }}" class="name" target="_blank">{{ $coupon['name'] }}</a>
                        </h5>
                        <p class="des">
                            @foreach($coupon['coupons'] as $value)
                                {{ $value['coupon_code'] }}
                            @endforeach
                            
                        </p>
                        <p class="info">
                            @php
                                $current = Carbon\Carbon::now();
                                $future = $coupon['end_time'];
                            @endphp
                            <span class="recommended mr-2"><i class="icon-check far fa-check-square"></i> Đã xác nhận</span>
                            <span class="end_time"><i class="icon-clock far fa-clock"></i> Còn {{ $current->diffInDays($future) + 1 }} ngày</span>
                        </p>
                    </div>
                @endforeach
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection