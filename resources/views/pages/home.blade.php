@extends('layouts.master')

@section('title', 'Mã giảm giá, phiếu khuyến mãi, đánh giá sản phẩm')
@section('description', 'Ứng dụng không thể thiếu cho những người mua sắm trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers. Đánh giá sản phẩm chân thật.')
@section('keywords', 'mã giảm giá, phiếu khuyến mãi, coupons, vouchers')

@section('fb_url', route('home'))
@section('fb_type', 'website')
@section('fb_title', 'Mã giảm giá, phiếu khuyến mãi, đánh giá sản phẩm')
@section('fb_des', 'Ứng dụng không thể thiếu cho những người mua sắm trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers. Đánh giá sản phẩm chân thật.')
@section('fb_img', asset('icons/launcher-icon-4x.png'))

@section('css')

@endsection

@section('content')
<div id="deal-hot-homepage" class="col-lg-12 mb-3 deal-hot-section">
    <div class="title">
        <h1>Deal HOT: Cập nhật các deal đang giảm giá mạnh</h1>
    </div>
    @include('products.product-list')
    <div class="view-more text-center mb-3">
        <a href="{{ route('deal-hot') }}" class="btn btn-warning">Xem tất cả</a>
    </div>
</div>

<div id="homepage" class="col-lg-9 mb-3 p-0">
    <!-- Ads -->
    @include('ads.azdigi')
    
    <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
        <li class="nav-item">
            <h1>
                <a class="nav-link active" id="promotion-tab" data-toggle="tab" href="#promotion" role="tab" aria-controls="promotion" aria-selected="true"><i class="fas fa-gift mr-2 bell"></i> <span class="color-warning">MÃ GIẢM GIÁ</span> HOT</a>
            </h1>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="promotion" role="tabpanel" aria-labelledby="promotion-tab">
            @php
                $promotions = getAllPromotions(NULL, 20);
            @endphp

            @include('partials.promotion-list')
        </div>
    </div>
</div>
<!-- Sidebar -->
@include('partials.sidebar')

@endsection

@section('advanced-filter')
    @include('partials.advanced-filter')
@endsection

@section('js')
<!-- Countdown JS -->
<script src="{{ asset('/plugins/jquery.countdown-2.2.0/jquery.countdown.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime('%D ngày %H:%M:%S'));
            });
        });
    });
</script>

 <!-- Google BreadcrumbList -->
<script type="application/ld+json">
[
    {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,				
                "item": {
                    "@id":"{{ route('home') }}",
                    "name": "Trang chủ ✅(Đã xác minh)"
                }			
            }
        ]
    }
]
</script>
@endsection