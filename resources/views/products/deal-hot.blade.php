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
<div id="deal-hot-page" class="deal-hot-section col-lg-9 mb-4">
    <div class="title">
        <h1>Deal HOT: Cập nhật các deal đang giảm giá mạnh</h1>
    </div>
    <div class="social-wrap text-center mb-4">
        <div class="fb-like" data-href="{{ route('deal-hot') }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
    </div>
    @include('products.product-list')
    <nav aria-label="...">
        <ul class="pagination">
            @if($page == 1)
                <li class="page-item disabled">
                    <span class="page-link"><</span>
                </li>
            @else   
                <li class="page-item">
                    <a class="page-link" href="{{ route('deal-hot') }}?page={{ $page-1 }}"><</a>
                </li>
            @endif
            @for($i=1;$i<=9;$i++)
            <li class="page-item {{ ($page==$i)?'active':'' }}">
                <a class="page-link" href="{{ route('deal-hot') }}?page={{ $i }}">{{ $i }}</a>
                @if($page==$i)
                    <span class="sr-only">(current)</span>
                @endif
            </li>
            @endfor
            @if($page == 9)
                <li class="page-item disabled">
                    <span class="page-link">></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ route('deal-hot') }}?page={{ $page+1 }}">></a>
                </li>
            @endif
            
        </ul>
    </nav>
    <div class="fb-comments" data-href="{{ route('deal-hot') }}" data-numposts="5" data-order-by="reverse_time" data-width="100%"></div>
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