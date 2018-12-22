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
        <meta name="apple-mobile-web-app-title" content="KhoCoupon.net">
        <link rel="apple-touch-icon" href="{{ asset('icons/ios/touch-icon-iphone.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icons/ios/touch-icon-ipad.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/ios/touch-icon-iphone-retina.png') }}">
        <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('icons/ios/touch-icon-ipad-retina.png') }}">

        <meta name="description" content="@yield('description')">
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="mã giảm giá, phiếu khuyến mãi, coupons, vouchers, @yield('keywords')">
        <meta name="author" content="Kho Coupon" />
        <link rel="canonical" href="https://khocoupon.net/" />
        <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">

        <!-- FB Open Graph Tags -->
        <meta property="fb:app_id"        content="xxxxxxxxxxxxxx" />
        <meta property="og:url"           content="@yield('fb_url')" />
        <meta property="og:type"          content="@yield('fb_type')" />
        <meta property="og:title"         content="@yield('fb_title')" />
        <meta property="og:description"   content="@yield('fb_des')" />
        <meta property="og:image"         content="@yield('fb_img')" />

        <link rel="manifest" href="{{ asset('/manifest.json') }}">
        
        <!-- Bootstrap CSS -->
        <link async rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}" >
        <!-- Fontawesome CSS -->
        <link async rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css') }}" >
        <!-- Select2 CSS -->
        <link async rel="stylesheet" href="{{ asset('/plugins/select2/select2.min.css') }}" >
        <!-- Pace CSS -->
        <style>
            .pace{-webkit-pointer-events:none;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;user-select:none}.pace-inactive{display:none}.pace .pace-progress{background:#ffc107;position:fixed;z-index:2000;top:0;right:100%;width:100%;height:2px}
        </style>
        <!-- Toastr CSS -->
        <link async rel="stylesheet" href="{{ asset('/plugins/toastr/toastr.min.css') }}" >
        <!-- Animate CSS -->
        <link async rel="stylesheet" href="{{ asset('/plugins/animate/animate.min.css') }}" >
        <!-- Custom CSS -->
        <link async rel="stylesheet" href="{{ asset('/css/custom.css') }}" >
        <!-- Responsive CSS -->
        <link async rel="stylesheet" href="{{ asset('/css/responsive.css') }}" >
        <!-- Article CSS -->
        <link async rel="stylesheet" href="{{ asset('/css/article.css') }}" >
        @yield('css')

        <!-- Analytics -->
        @include('socials.analytics')

        <!-- Google Adsense -->
        @include('socials.adsense')
    </head>
    <body>
        

        <!-- Header -->
        @include('partials.header')
        <div id="content-container" class="container">
            <div class="row">
                <!-- Content Page -->
                @yield('content')

                <!-- Sidebar -->
                @include('partials.sidebar')
            </div>
        </div>

        <!-- Footer -->
        @include('partials.footer')

        <!-- Advanced Filter -->
        @yield('advanced-filter')

        <!-- Coupon Modal -->
        @yield('coupon-modal')

        <!-- Service Worker JS -->
        <script>
            if ("serviceWorker" in navigator) {
                window.addEventListener("load", function () {
                    navigator.serviceWorker.register("/service-worker.js");
                });
            }
        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery JS -->
        <script src="{{ asset('/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
        <!-- Popper JS -->
        <script async src="{{ asset('/plugins/popper/popper.min.js') }}" ></script>
        <!-- Bootstrap JS  -->
        <script async src="{{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
        <!-- Select2 JS -->
        <script async src="{{ asset('/plugins/select2/select2.min.js') }}" ></script>
        <!-- Pace JS -->
        <script async src="{{ asset('/plugins/pace/pace.min.js') }}" ></script>
        <!-- Toastr JS -->
        <script async src="{{ asset('/plugins/toastr/toastr.min.js') }}" ></script>
        <!-- Custom JS -->
        <script async src="{{ asset('/js/custom.js') }}" ></script>

        @yield('js')
    </body>
</html>