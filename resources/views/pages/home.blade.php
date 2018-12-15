@extends('layouts.master')

@section('css')

@endsection

@section('content')
<div id="homepage" class="col-lg-12">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="promotion-tab" data-toggle="tab" href="#promotion" role="tab" aria-controls="promotion" aria-selected="true">Khuyến mãi (hot)</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="coupon-tab" data-toggle="tab" href="#coupon" role="tab" aria-controls="coupon" aria-selected="false">Mã giảm giá (new)</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="promotion" role="tabpanel" aria-labelledby="promotion-tab">
            <div class="row">
                @foreach($promotions as $promotion)
                    <div class="col-lg-12 item-group">
                        <h5>
                            <a href="#" class="merchant">[{{ $promotion->merchant }}]</a><a href="#" class="name">{{ $promotion->name }}</a>
                        </h5>
                        <p class="info">
                            @php
                                $current = Carbon\Carbon::now();
                                $future = $promotion->end_time;
                            @endphp
                            <span class="recommended mr-2"><i class="icon-check far fa-check-square"></i> Đã xác nhận</span>
                            <span class="end_time"><i class="icon-clock far fa-clock"></i> Còn {{ $current->diffInDays($future) + 1 }} ngày</span>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="coupon" role="tabpanel" aria-labelledby="coupon-tab">
            <div class="row">
                @foreach($coupons as $coupon)
                    
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection