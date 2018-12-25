@extends('layouts.master')

@section('title', $post->seo_title)
@section('description', $post->meta_description)
@section('keywords', $post->meta_keywords)

@section('fb_url', route('post-detail', [$post->slug, $post->id]))
@section('fb_type', 'article')
@section('fb_title', $post->seo_title)
@section('fb_des', $post->meta_description)
@section('fb_img', Voyager::image($post->image))

@section('css')

@endsection

@section('content')
<div class="page-content col-lg-9 mb-4 animated fadeInLeft">
    <div class="title"><h1>{{ $post->title }}</h1></div>
    <div class="created_at">{{ date('H:m d/m/Y', strtotime($post->created_at)) }}</div>
    <div class="article">
        {!! $post->body !!}
    </div>
    <div class="author"><a href="{{ route('home') }}" alt="Ứng dụng tổng hợp MÃ GIẢM GIÁ | PHIẾU KHUYẾN MÃI | COUPONS | VOUCHERS miễn phí">KhoCoupon.Net</a></div>
</div>
@endsection

@section('advanced-filter')
    @include('partials.advanced-filter')
@endsection

@section('js')
    <script>
        
        $( document ).ready(function() {
            $('img').unwrap("p");
        });
    </script>
@endsection