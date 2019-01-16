@extends('layouts.master')

@section('title', 'Tổng hợp khuyến mãi '.$merchant.' tháng '. date('m') . ' tại khocoupon.net')
@section('description', 'Cập nhật mã giảm giá '.$merchant.', phiếu khuyến mãi '.$merchant.', coupons '.$merchant.', vouchers '.$merchant.'.')
@section('keywords', 'mã giảm giá, phiếu khuyến mãi, coupons, vouchers')

@section('fb_url', route('merchant-filter', $merchant))
@section('fb_type', 'website')
@section('fb_title', 'Tổng hợp khuyến mãi '.$merchant.' tháng '. date('m') . ' tại khocoupon.net')
@section('fb_des', 'Cập nhật mã giảm giá '.$merchant.', phiếu khuyến mãi '.$merchant.', coupons '.$merchant.', vouchers '.$merchant.'.')
@section('fb_img', asset('icons/launcher-icon-4x.png'))

@section('css')

@endsection

@section('content')
<div id="merchant" class="col-lg-9 mb-4 p-0">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <h1>
                <a class="nav-link active" id="promotion-tab" data-toggle="tab" href="#promotion" role="tab" aria-controls="promotion" aria-selected="true"><i class="fas fa-gift mr-2 bell"></i> KHUYẾN MÃI <span class="color-warning">{{ $merchant }}</span> MỚI NHẤT THÁNG {{date('m')}}</a>
            </h1>
            
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="promotion" role="tabpanel" aria-labelledby="promotion-tab">
            @php
                $promotions = getAllPromotions($merchant, 15);
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

@section('coupon-modal')
    @include('partials.coupon-modal')
@endsection

@section('js')
    <script>
        // FUNCTION: Get All Parameters on URL
        function getAllUrlParams(url) {
            var queryString = url ? url.split('?')[1] : window.location.search.slice(1);
            var obj = {};
            if (queryString) {
                queryString = queryString.split('#')[0];
                var arr = queryString.split('&');
                for (var i = 0; i < arr.length; i++) {
                    var a = arr[i].split('=');
                    var paramName = a[0];
                    var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];
                    paramName = paramName.toLowerCase();
                    if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();
                    if (paramName.match(/\[(\d+)?\]$/)) {
                        var key = paramName.replace(/\[(\d+)?\]/, '');
                        if (!obj[key]) obj[key] = [];
                        if (paramName.match(/\[\d+\]$/)) {
                            var index = /\[(\d+)\]/.exec(paramName)[1];
                            obj[key][index] = paramValue;
                        }
                        else{
                            obj[key].push(paramValue);
                        }
                    } 
                    else{
                        if (!obj[paramName]) {
                            obj[paramName] = paramValue;
                        } else if (obj[paramName] && typeof obj[paramName] === 'string'){
                            obj[paramName] = [obj[paramName]];
                            obj[paramName].push(paramValue);
                        } else {
                            obj[paramName].push(paramValue);
                        }
                    }
                }
            }
            return obj;
        }
        
        // CHECK: Open Coupon Modal
        $(document).ready(function() {
            var promotionId = getAllUrlParams().promotion;
            // CHECK: if have promotionId then call ajax to get coupon info
            if(promotionId){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('getCouponByPromotionId') }}",
                    method: 'post',
                    data: {
                        promotion_id: promotionId
                    },
                    success: function(result){
                        if(result.status == true){
                            var promotion = result.data;
                            $("#couponModal .modal-title").html('['+promotion.merchant+'] '+promotion.name);
                            $("#couponModal .code-text").val(promotion.coupons[0].coupon_code);
                            $("#couponModal .coupon-des").html(promotion.content);
                            $("#couponModal").modal();
                        }
                        
                    }
                });
            }
        });
    </script>

    <script type="application/ld+json"> 
    [{
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,				
                "item": {
                    "@id":"{{ route('home') }}",
                    "name": "Trang chủ"
                }			
                }, 
                {
                "@type": "ListItem",
                "position": 2,				
                "item": {
                    "@id":"{{ route('merchant-filter', $merchant) }}",
                    "name": "Mã giảm giá ✅(Đã xác minh)"
                }			
            }
        ]
    }]
    </script>
    
@endsection