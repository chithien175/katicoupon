@extends('layouts.master')

@section('css')

@endsection

@section('content')
<div id="merchant" class="col-lg-9 mb-4">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="promotion-tab" data-toggle="tab" href="#promotion" role="tab" aria-controls="promotion" aria-selected="true"><i class="fas fa-tags"></i> TỔNG HỢP KHUYẾN MÃI <span class="color-warning">{{ $merchant }}</span> THÁNG {{date('m')}}</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="promotion" role="tabpanel" aria-labelledby="promotion-tab">
            @php
                $promotions = getAllPromotions($merchant);
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