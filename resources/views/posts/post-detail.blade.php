@extends('layouts.master')

@section('amp-link', route('amp-post-detail', [$post->slug, $post->id]))

@section('title', $post->seo_title)
@section('description', $post->meta_description)
@section('keywords', $post->meta_keywords)

@section('fb_url', route('post-detail', [$post->slug, $post->id]))
@section('fb_type', 'website')
@section('fb_title', $post->seo_title)
@section('fb_des', $post->meta_description)
@section('fb_img', Voyager::image($post->image))

@section('css')

@endsection

@section('content')
<div class="page-content col-lg-9 mb-3 aos-item" data-aos="fade-right">
    <div class="title"><h1>{{ $post->title }}</h1></div>
    <div class="created_at">
        <span class="category">{{ $post->category->name }}</span> | {{ date('d/m/Y H:m:A', strtotime($post->created_at)) }}
    </div>
    <div class="fb-like" data-href="{{ route('post-detail', [$post->slug, $post->id]) }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
    <div class="article">
        {!! $post->body !!}
    </div>
    <div class="author"><a href="{{ route('home') }}" alt="Ứng dụng tổng hợp MÃ GIẢM GIÁ | PHIẾU KHUYẾN MÃI | COUPONS | VOUCHERS miễn phí">KhoCoupon.Net</a></div>
    <div class="social-wrap">
        <div class="fb-like" data-href="{{ route('post-detail', [$post->slug, $post->id]) }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
    </div>
    <div class="fb-comments" data-href="{{ route('post-detail', [$post->slug, $post->id]) }}" data-numposts="5" data-order-by="reverse_time" data-width="100%"></div>
    
    @if($relatedPosts->count() > 0)
        @include('posts.related-posts')
    @endif

    <!-- Ads -->
    @include('ads.azdigi')
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
                        "@id":"{{ route('post-detail', [$post->slug, $post->id]) }}",
                        "name": "Đánh giá mới ✅(Đã xác minh)"
                    }			
                }
            ]
        },
        {
            "@context": "http://schema.org", 
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{ route('post-detail', [$post->slug, $post->id]) }}"
            },
            "headline": "{{ $post->seo_title }}",
            "alternativeHeadline": "{{ $post->meta_description }}",
            "image": "{{ Voyager::image($post->thumbnail('small')) }}", 	
            "author": {
                "@type": "Person",
                "name": "KhoCoupon"
            },
            "editor": {
                "@type": "Person",
                "name": "KhoCoupon"
            },
            "award": "Mã giảm giá miễn phí tại Việt Nam", 	 
            "genre": "{{ $post->category->name }}", 
            "articleSection":"{{ $post->category->name }}",
            "keywords": "{{ $post->meta_keywords }}",
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
            "url": "{{ route('post-detail', [$post->slug, $post->id]) }}",
            "datePublished": "{{ $post->created_at }}",
            "dateCreated": "{{ $post->created_at }}",
            "dateModified": "{{ $post->created_at }}",
            "description": "{{ $post->meta_description }}"
        }
    ]
    </script>
@endsection