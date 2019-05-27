@extends('layouts.master')

@section('title', 'Kiểm tra màn hình responsive tất cả thiết bị tại Khocoupon.net')
@section('description', 'Kiểm tra màn hình responsive tất cả thiết bị tại Khocoupon.net')
@section('keywords', 'mã giảm giá, phiếu khuyến mãi, coupons, vouchers')

@section('fb_url', route('responsive-all-devices'))
@section('fb_type', 'website')
@section('fb_title', 'Kiểm tra màn hình responsive tất cả thiết bị tại Khocoupon.net')
@section('fb_des', 'Kiểm tra màn hình responsive tất cả thiết bị tại Khocoupon.net')
@section('fb_img', asset('icons/launcher-icon-4x.png'))

@section('css')

@endsection

@section('content')
<div id="responsive-all-devices" class="col-lg-12 mb-4 p-0" style="display: contents;">
    <div class="col-lg-12">
        <form action="#" method="GET">
            <input type="url" placeholder="Nhập đường dẫn website">
            <input type="submit" value="Go">
        </form>
    </div>
    
    <div class="mobile-device">
        <h6>iPhone 5/SE</h6>
        <iframe src="https://webdepnhatrang.com/" frameborder="0" width="320" height="500"></iframe>
    </div>
    <div class="mobile-device">
        <h6>iPhone 6/7/8/X</h6>
        <iframe src="https://webdepnhatrang.com/" frameborder="0" width="375" height="500"></iframe>
    </div>
    <div class="mobile-device">
        <h6>iPhone 6/7/8 Plus</h6>
        <iframe src="https://webdepnhatrang.com/" frameborder="0" width="414" height="500"></iframe>
    </div>
    <div class="mobile-device">
        <h6>iPad</h6>
        <iframe src="https://webdepnhatrang.com/" frameborder="0" width="768" height="1024"></iframe>
    </div>
    <div class="mobile-device">
        <h6>iPad Pro</h6>
        <iframe src="https://webdepnhatrang.com/" frameborder="0" width="1024" height="1366"></iframe>
    </div>
</div>

@endsection

@section('js')
    <script>
        
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
                    "@id":"{{ route('responsive-all-devices') }}",
                    "name": "Test responsive all devices ✅(Đã xác minh)"
                }			
            }
        ]
    }]
    </script>
    
@endsection