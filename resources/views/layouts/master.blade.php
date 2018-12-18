<!doctype html>
<html lang="vi">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Ứng dụng tổng hợp MÃ GIẢM GIÁ | PHIẾU KHUYẾN MÃI | COUPONS | VOUCHERS lớn nhất Việt Nam</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css') }}">
        <!-- Select2 CSS -->
        <link href="{{ asset('/plugins/select2/select2.min.css') }}" rel="stylesheet" />
        <!-- Pace CSS -->
        <link rel="stylesheet" href="{{ asset('/plugins/pace/pace.css') }}">
        <!-- Toastr CSS -->
        <link rel="stylesheet" href="{{ asset('/plugins/toastr/toastr.min.css') }}">
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
        @include('partials.advanced-filter')

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