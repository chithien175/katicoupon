@extends('layouts.master')

@section('css')

@endsection

@section('content')
<div id="homepage" class="col-lg-9 mb-4 animated fadeInLeft">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="promotion-tab" data-toggle="tab" href="#promotion" role="tab" aria-controls="promotion" aria-selected="true"><i class="fas fa-gift mr-2 bell"></i> <span class="color-warning">KHUYẾN MÃI</span> ĐANG DIỄN RA</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="promotion" role="tabpanel" aria-labelledby="promotion-tab">
            @php
                $promotions = getAllPromotions(NULL);
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