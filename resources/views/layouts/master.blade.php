<!doctype html>
<html lang="vi">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        
        <!-- Token -->
        <meta name="_token" content="{{csrf_token()}}" />

        <!-- Google SEO -->
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="@yield('description')">
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="mã giảm giá, phiếu khuyến mãi, coupons, vouchers, @yield('keywords')">
        <meta name="author" content="Kho Coupon" />
        <link rel="canonical" href="https://khocoupon.net/" />
        <link rel="shortcut icon" type="image/png" href="">

        <!-- FB Open Graph Tags -->
        <meta property="fb:app_id"        content="xxxxxxxxxxxxxx" />
        <meta property="og:url"           content="@yield('fb_url')" />
        <meta property="og:type"          content="@yield('fb_type')" />
        <meta property="og:title"         content="@yield('fb_title')" />
        <meta property="og:description"   content="@yield('fb_des')" />
        <meta property="og:image"         content="@yield('fb_img')" />
   

        
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css') }}">
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ asset('/plugins/select2/select2.min.css') }}" />
        <!-- Pace CSS -->
        <link rel="stylesheet" href="{{ asset('/plugins/pace/pace.css') }}">
        <!-- Toastr CSS -->
        <link rel="stylesheet" href="{{ asset('/plugins/toastr/toastr.min.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('/plugins/animate/animate.css') }}">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
        @yield('css')
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

        <!-- Optional JavaScript -->
        <!-- jQuery JS -->
        <script src="{{ asset('/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
        <!-- Popper JS -->
        <script src="{{ asset('/plugins/popper/popper.min.js') }}"></script>
        <!-- Bootstrap JS  -->
        <script src="{{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- Select2 JS -->
        <script src="{{ asset('/plugins/select2/select2.min.js') }}"></script>
        <!-- Pace JS -->
        <script src="{{ asset('/plugins/pace/pace.min.js') }}"></script>
        <!-- Toastr JS -->
        <script src="{{ asset('/plugins/toastr/toastr.min.js') }}"></script>
        <!-- Custom JS -->
        <script src="{{ asset('/js/custom.js') }}"></script>
        @yield('js')
    </body>
</html>