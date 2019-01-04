<!doctype html>
<html lang="vi">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        
        <!-- Token -->
        <meta name="_token" content="{{csrf_token()}}" />

        <!-- Google SEO -->
        <title>@yield('title')</title>

        <!-- Set for iOS -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0"/>
        <meta name="apple-mobile-web-app-title" content="Mã giảm giá, phiếu khuyến mãi miễn phí tại khocoupon.net">
        <link rel="apple-touch-icon" href="{{ asset('icons/ios/touch-icon-iphone.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icons/ios/touch-icon-ipad.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/ios/touch-icon-iphone-retina.png') }}">
        <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('icons/ios/touch-icon-ipad-retina.png') }}">

        <!-- Link to AMP page -->
        
        <link rel="amphtml" href="@yield('amp-link')">

        <meta name="description" content="@yield('description')">
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="@yield('keywords')">
        <meta name="author" content="Kho Coupon" />
        <link rel="canonical" href="{{ url('/') }}" />
        <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">

        <!-- FB Open Graph Tags -->
        <meta property="fb:app_id"        content="2028919047203695" />
        <meta property="og:url"           content="@yield('fb_url')" />
        <meta property="og:type"          content="@yield('fb_type')" />
        <meta property="og:title"         content="@yield('fb_title')" />
        <meta property="og:description"   content="@yield('fb_des')" />
        <meta property="og:image"         content="@yield('fb_img')" />
        
        <noscript>
        <!-- Select2 CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/select2/select2.min.css') }}" >
        <!-- Toastr CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/toastr/toastr.min.css') }}" >
        <!-- Animate CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/animate/animate.min.css') }}" >
        </noscript>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}" >
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.min.css') }}" >
        <!-- Pace CSS -->
        <style>
            .pace{-webkit-pointer-events:none;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;user-select:none}.pace-inactive{display:none}.pace .pace-progress{background:#ffc107;position:fixed;z-index:2000;top:0;right:100%;width:100%;height:2px}
            
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);.loader,.preloader-wrap .title{left:45%;position:absolute;z-index:999}.preloader-wrap .title{font-family:'Open Sans';font-weight:600;font-size:12px;text-transform:uppercase;top:58%;margin-left:-20px;color:#17a2b8}.loader{top:50%;margin-left:-50px;animation:speeder .4s linear infinite}.loader>span{height:5px;width:35px;background:#ffc107;position:absolute;top:-19px;left:60px;border-radius:2px 10px 1px 0}.base span:after,.base span:before{position:absolute;top:-16px;content:""}.base span{position:absolute;width:0;height:0;border-top:6px solid transparent;border-right:100px solid #ffc107;border-bottom:6px solid transparent}.base span:before{height:22px;width:22px;border-radius:50%;background:#ffc107;right:-110px}.base span:after{width:0;height:0;border-top:0 solid transparent;border-right:55px solid #ffc107;border-bottom:16px solid transparent;right:-98px}.face,.face:after{height:12px;position:absolute;background:#ffc107}.face{width:20px;border-radius:20px 20px 0 0;transform:rotate(-40deg);right:-125px;top:-15px}.face:after{content:"";width:12px;right:4px;top:7px;transform:rotate(40deg);transform-origin:50% 50%;border-radius:0 0 0 2px}.loader>span>span:nth-child(1),.loader>span>span:nth-child(2),.loader>span>span:nth-child(3),.loader>span>span:nth-child(4){width:30px;height:1px;background:#ffc107;position:absolute;animation:fazer1 .2s linear infinite}.loader>span>span:nth-child(2){top:3px;animation:fazer2 .4s linear infinite}.loader>span>span:nth-child(3){top:1px;animation:fazer3 .4s linear infinite;animation-delay:-1s}.loader>span>span:nth-child(4){top:4px;animation:fazer4 1s linear infinite;animation-delay:-1s}@keyframes fazer1{0%{left:0}100%{left:-80px;opacity:0}}@keyframes fazer2{0%{left:0}100%{left:-100px;opacity:0}}@keyframes fazer3{0%{left:0}100%{left:-50px;opacity:0}}@keyframes fazer4{0%{left:0}100%{left:-150px;opacity:0}}@keyframes speeder{0%,90%{transform:translate(2px,1px) rotate(0)}10%{transform:translate(-1px,-3px) rotate(-1deg)}20%{transform:translate(-2px,0) rotate(1deg)}30%{transform:translate(1px,2px) rotate(0)}40%{transform:translate(1px,-1px) rotate(1deg)}50%{transform:translate(-1px,3px) rotate(-1deg)}60%{transform:translate(-1px,1px) rotate(0)}70%{transform:translate(3px,1px) rotate(-1deg)}80%{transform:translate(-2px,-1px) rotate(1deg)}100%{transform:translate(1px,-2px) rotate(-1deg)}}.longfazers{position:absolute;width:100%;height:100%;z-index:999}.longfazers span{position:absolute;height:2px;width:20%;background:#17a2b8}.longfazers span:nth-child(1){top:20%;animation:lf .6s linear infinite;animation-delay:-5s}.longfazers span:nth-child(2){top:40%;animation:lf2 .8s linear infinite;animation-delay:-1s}.longfazers span:nth-child(3){top:60%;animation:lf3 .6s linear infinite}.longfazers span:nth-child(4){top:80%;animation:lf4 .5s linear infinite;animation-delay:-3s}@keyframes lf{0%{left:200%}100%{left:-200%;opacity:0}}@keyframes lf2{0%{left:200%}100%{left:-200%;opacity:0}}@keyframes lf3{0%{left:200%}100%{left:-100%;opacity:0}}@keyframes lf4{0%{left:200%}100%{left:-100%;opacity:0}}
        </style>

        
        @yield('css')

        <!-- eClick Verify -->
        <meta name="eclick_verify" content="dFVcUVMXLRcYGVlEaggEBgAEMBMDB00FIBc="/>

        <!-- Web Push Notification Onesignal -->
        <link rel="manifest" href="/manifest.json" />
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        <script>
            var OneSignal = window.OneSignal || [];
            OneSignal.push(function() {
                OneSignal.init({
                appId: "ba4923d0-5c96-4ac6-8e33-973b03d42a0a",
                });
            });
        </script>

        <!-- Analytics -->
        @include('socials.analytics')

        <!-- Google Adsense -->
        @include('socials.adsense')
    </head>
    <body>
        <!-- preloder-wrap -->
        <div id="cssLoader3" class="preloader-wrap">
            <div class='loader'>
                <span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div class='base'>
                    <span></span>
                    <div class='face'></div>
                </div>
            </div>
            <div class='longfazers'>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="title">Đang tải...</div>
        </div>
        <!-- preloder-wrap -->
        
        <!-- Load Facebook SDK for JavaScript -->
        @include('socials.facebook-sdk')

        <!-- Header -->
        @include('partials.header')

        <!-- Ads Banner-Top -->
        <div id="ad-banner-top" style="margin-top: 60px;">
            <div class="">
                <a href="https://page.khocoupon.net" target="_blank" title="Tạo trang landing page miễn phí">
                    <img src="{{ asset('/images/banner_top.png') }}" alt="Tạo trang landing page miễn phí" style="width: 100%; height: auto;">
                </a>
            </div>
        </div>

        <div id="content-container" class="container">
            <div class="row">
                <!-- Content Page -->
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        @include('partials.footer')

        <!-- Scroll Top Button -->
        <button class="scroltop"><i class="fas fa-chevron-up"></i></button>

        <!-- Advanced Filter -->
        @yield('advanced-filter')

        <!-- Coupon Modal -->
        @yield('coupon-modal')

        <!-- Trì hoãn load css -->
        <script type="text/javascript">
            /* Animate CSS */
            var giftofspeed5 = document.createElement('link');
            giftofspeed5.rel = 'stylesheet';
            giftofspeed5.href = '{{ asset("/plugins/animate/animate.min.css") }}';
            giftofspeed5.type = 'text/css';
            var godefer5 = document.getElementsByTagName('link')[0];
            godefer5.parentNode.insertBefore(giftofspeed5, godefer5);   
            /* Toastr CSS */
            var giftofspeed4 = document.createElement('link');
            giftofspeed4.rel = 'stylesheet';
            giftofspeed4.href = '{{ asset("/plugins/toastr/toastr.min.css") }}';
            giftofspeed4.type = 'text/css';
            var godefer4 = document.getElementsByTagName('link')[0];
            godefer4.parentNode.insertBefore(giftofspeed4, godefer4);

            /* Select2 CSS */
            var giftofspeed3 = document.createElement('link');
            giftofspeed3.rel = 'stylesheet';
            giftofspeed3.href = '{{ asset("/plugins/select2/select2.min.css") }}';
            giftofspeed3.type = 'text/css';
            var godefer3 = document.getElementsByTagName('link')[0];
            godefer3.parentNode.insertBefore(giftofspeed3, godefer3);
        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery JS -->
        <script src="{{ asset('/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
        <!-- Popper JS -->
        <script defer src="{{ asset('/plugins/popper/popper.min.js') }}" ></script>
        <!-- Bootstrap JS  -->
        <script defer src="{{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
        <!-- Select2 JS -->
        <script defer src="{{ asset('/plugins/select2/select2.min.js') }}" ></script>
        <!-- Pace JS -->
        <script defer src="{{ asset('/plugins/pace/pace.min.js') }}" ></script>
        <!-- Toastr JS -->
        <script defer src="{{ asset('/plugins/toastr/toastr.min.js') }}" ></script>
        <!-- Custom JS -->
        <script defer src="{{ asset('/js/custom.js') }}" ></script>
        <!-- Fontawesome JS -->
        <script defer src="{{ asset('/plugins/fontawesome/js/all.min.js') }}" ></script>
        @yield('js')

        <!-- Google Organization, WebSite, Persion -->
        <script type="application/ld+json"> 
            [
                {
                    "@context"        : "http://schema.org",
                    "@type"           : "WebSite",
                    "name"            : "KhoCoupon",
                    "alternateName"   : "Mã giảm giá, phiếu khuyến mãi miễn phí tại khocoupon.net",
                    "url": "{{ url('/') }}",
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "{{ url('/') }}/tim-kiem#gsc.tab=0&gsc.q={search_term_string}",
                        "query-input": "required name=search_term_string"
                    }
                },
                {
                    "@context": "http://schema.org",
                    "@type": "Organization",
                    "url": "{{ url('/') }}",
                    "logo": "{{ asset('icons/launcher-icon-4x.png') }}"
                },
                {
                    "@context": "http://schema.org",
                    "@type": "Person",
                    "name": "KCP",
                    "url": "{{ url('/') }}",
                    "sameAs": [
                        "https://www.facebook.com/www.khocoupon.net/"
                    ]
                }
            ]
        </script>
    </body>
</html>