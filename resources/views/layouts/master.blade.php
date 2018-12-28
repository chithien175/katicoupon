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
        
        <!-- Bootstrap CSS -->
        <link defer rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}" >
        <!-- Fontawesome CSS -->
        <link defer rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css') }}" >
        <!-- Select2 CSS -->
        <link defer rel="stylesheet" href="{{ asset('/plugins/select2/select2.min.css') }}" >
        <!-- Pace CSS -->
        <style>
            .pace{-webkit-pointer-events:none;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;user-select:none}.pace-inactive{display:none}.pace .pace-progress{background:#ffc107;position:fixed;z-index:2000;top:0;right:100%;width:100%;height:2px}
        </style>
        <!-- Toastr CSS -->
        <link defer rel="stylesheet" href="{{ asset('/plugins/toastr/toastr.min.css') }}" >
        <!-- Animate CSS -->
        <link defer rel="stylesheet" href="{{ asset('/plugins/animate/animate.min.css') }}" >
        <!-- Custom CSS -->
        <link defer rel="stylesheet" href="{{ asset('/css/custom.css') }}" >
        <!-- Responsive CSS -->
        <link defer rel="stylesheet" href="{{ asset('/css/responsive.css') }}" >
        <!-- Article CSS -->
        <link defer rel="stylesheet" href="{{ asset('/css/article.css') }}" >
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
        <!-- Load Facebook SDK for JavaScript -->
        @include('socials.facebook-sdk')

        <!-- Header -->
        @include('partials.header')
        <div id="content-container" class="container">
            <div class="row">
                <!-- Content Page -->
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        @include('partials.footer')

        <!-- Advanced Filter -->
        @yield('advanced-filter')

        <!-- Coupon Modal -->
        @yield('coupon-modal')

        <!-- Optional JavaScript -->
        <!-- jQuery JS -->
        <script defer src="{{ asset('/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
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
        @yield('js')

        <!-- Scroll Top Button -->
        <button class="scroltop fa fa-chevron-up" ></button>

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