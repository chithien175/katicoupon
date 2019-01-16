@extends('layouts.master')

@section('title', 'Tin tức đánh giá '.$category->name.' tại khocoupon.net')
@section('description', 'Chuyên trang phân tích đánh giá sản phẩm '.$category->name.' chân thật')
@section('keywords', $category->name.','.$category->slug.',đánh giá '.$category->name.',review '.$category->name)

@section('fb_url', route('post-by-cate', $category->slug))
@section('fb_type', 'website')
@section('fb_title', 'Tin tức đánh giá '.$category->name.' tại khocoupon.net')
@section('fb_des', 'Chuyên trang phân tích đánh giá sản phẩm '.$category->name.' chân thật')
@section('fb_img', asset('icons/launcher-icon-4x.png'))

@section('css')

@endsection

@section('content')
<div class="post-by-cate col-lg-9 mb-4">
    <div class="cate-title">
        <h1>{{ $category->name }}</h1>
    </div>
    <div class="featured">
        @foreach($posts as $key => $post)
            @if($key == 0)
            <article class="first row">
                <div class="thumb col-md-8 col-xs-12">
                    <a href="{{ route('post-detail', [$post->slug, $post->id]) }}">
                        <img src="{{ Voyager::image($post->thumbnail('medium')) }}" alt="{{ $post->title }}">
                    </a>
                </div>
                <div class="info col-md-4 col-xs-12">
                    <h2 class="title">
                        <a href="{{ route('post-detail', [$post->slug, $post->id]) }}">{{ $post->title }}</a>
                    </h2>
                    <time>{{ date('d/m/Y H:m:A', strtotime($post->created_at)) }}</time>
                    <p class="summary">
                        {{ $post->meta_description }}
                    </p>
                </div>
            </article>
            
            @else
            <article class="box">
                <div class="thumb">
                    <a href="{{ route('post-detail', [$post->slug, $post->id]) }}">
                        <img src="{{ Voyager::image($post->thumbnail('medium')) }}" alt="{{ $post->title }}">
                    </a>
                </div>
                <div class="info">
                    <h2 class="title">
                        <a href="{{ route('post-detail', [$post->slug, $post->id]) }}">{{ $post->title }}</a>
                    </h2>
                    <time>{{ date('d/m/Y H:m:A', strtotime($post->created_at)) }}</time>
                </div>
            </article>
            @endif
            
        @endforeach
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
                        "@id":"{{ route('post-by-cate', $category->slug) }}",
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
                "@id": "{{ route('post-by-cate', $category->slug) }}"
            },
            "headline": "{{ 'Phân tích đánh giá '.$category->name.' tại khocoupon.net' }}",
            "alternativeHeadline": "{{ 'Chuyên trang phân tích đánh giá sản phẩm '.$category->name.' chân thật' }}",
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
            "genre": "{{ 'Phân tích đánh giá '.$category->name.' tại khocoupon.net' }}", 
            "articleSection":"{{ 'Phân tích đánh giá '.$category->name.' tại khocoupon.net' }}",
            "keywords": "{{ $category->name.','.$category->slug.',đánh giá '.$category->name.',review '.$category->name }}",
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
            "url": "{{ route('post-by-cate', $category->slug) }}",
            "datePublished": "{{ $category->created_at }}",
            "dateCreated": "{{ $category->created_at }}",
            "dateModified": "{{ $category->created_at }}",
            "description": "{{ 'Chuyên trang phân tích đánh giá sản phẩm '.$category->name.' chân thật' }}"
        }
    ]
    </script>
@endsection