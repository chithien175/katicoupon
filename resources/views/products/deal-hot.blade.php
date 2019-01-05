@extends('layouts.master')

@section('title', 'Deal HOT: Tất cả Deal tại KhoCoupon.net')
@section('description', 'Cập nhật liên tục từng giờ các deal giảm giá đang bán ở mọi ngành hàng!')
@section('keywords', 'hot deal, deal sập sàn, sản phẩm giảm giá, tổng hợp deal')

@section('fb_url', route('deal-hot'))
@section('fb_type', 'website')
@section('fb_title', 'Deal HOT: Tất cả Deal tại KhoCoupon.net')
@section('fb_des', 'Cập nhật liên tục từng giờ các deal giảm giá đang bán ở mọi ngành hàng!')
@section('fb_img', asset('icons/launcher-icon-4x.png'))

@section('css')

@endsection

@section('content')
<div id="deal-hot-section" class="col-lg-9 mb-4 animated fadeInLeft">
    <div class="title">
        <h1>Deal HOT: Cập nhật các deal đang giảm giá mạnh</h1>
    </div>
    <div class="items">
        @for($i=1;$i<=20;$i++)
            <a href="#" class="deal-item">
                <div class="thumb"><img src="https://salt.tikicdn.com/cache/280x280/ts/product/bd/6a/ce/d1b2ef72a20515d249938bf7c2d5d979.jpg" alt=""></div>
                <div class="title">
                    Nồi Chiên Không Dầu Điện Tử Lock&Lock ECF-300B (3 lít)
                </div>
                <div class="price">
                    {{ number_format("3490000",0,",",".") }} ₫
                    <span class="price-regular">{{ number_format("4990000",0,",",".") }} ₫</span>
                </div>
                <div class="deal-status">
                    <div class="started">
                        <div class="deal-count-down">
                            <span class="time">Còn 11 ngày 10:00:00</span>
                        </div>
                    </div>
                    <div class="process-bar">
                        <div style="width: 33%;"></div>
                        <span class="text">Đã bán 1648</span>
                    </div>
                </div>
            </a>
        @endfor
    </div>
</div>
<!-- Sidebar -->
@include('partials.sidebar')

@endsection

@section('advanced-filter')
    @include('partials.advanced-filter')
@endsection

@section('js')
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
                        "name": "Trang chủ"
                    }			
                    }, 
                    {
                    "@type": "ListItem",
                    "position": 2,				
                    "item": {
                        "@id":"{{ route('deal-hot') }}",
                        "name": "Hot Deal 24h ✅(Đã xác minh)"
                    }			
                }
            ]
        },
        {
            "@context": "http://schema.org", 
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{ route('deal-hot') }}"
            },
            "headline": "Cập nhật liên tục từng giờ các deal giảm giá đang bán ở mọi ngành hàng!",
            "alternativeHeadline": "Cập nhật liên tục từng giờ các deal giảm giá đang bán ở mọi ngành hàng!",
            "image": "{{ asset('/icons/launcher-icon-4x.png') }}", 	
            "author": {
                "@type": "Person",
                "name": "KhoCoupon"
            },
            "editor": {
                "@type": "Person",
                "name": "KhoCoupon"
            },
            "award": "Mã giảm giá miễn phí tại Việt Nam", 	 
            "genre": "Cập nhật liên tục từng giờ các deal giảm giá đang bán ở mọi ngành hàng!", 
            "articleSection":"Cập nhật liên tục từng giờ các deal giảm giá đang bán ở mọi ngành hàng!",
            "keywords": "hot deal, deal sập sàn, sản phẩm giảm giá, tổng hợp deal",
            "publisher": {
                "@type": "Organization",
                "name": "KhoCoupon",
                "url":"{{ url('/') }}",
                "sameAs":["https://www.facebook.com/www.khocoupon.net/"],				
                "logo": {
                    "@type": "ImageObject",
                    "name":"KhoCoupon",
                    "width": "192px",
                    "height": "192px",
                    "url": "{{ asset('/icons/launcher-icon-4x.png') }}"
                }
            },
            "aggregateRating": {
                "@type": "AggregateRating", 
                "ratingValue": "4.8", 
                "reviewCount": "200"
            },
            "url": "{{ route('deal-hot') }}",
            "description": "Cập nhật liên tục từng giờ các deal giảm giá đang bán ở mọi ngành hàng!"
        }
    ]
    </script>
@endsection