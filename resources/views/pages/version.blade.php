@extends('layouts.master')

@section('title', 'Tính Năng & Phiên Bản Ứng Dụng Tại khocoupon.net')
@section('description', 'Ứng dụng không thể thiếu cho những người mua sắm trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers. Đánh giá sản phẩm chân thật.')
@section('keywords', 'website')

@section('fb_url', route('version'))
@section('fb_type', '')
@section('fb_title', 'Tính Năng & Phiên Bản Ứng Dụng Tại khocoupon.net')
@section('fb_des', 'Ứng dụng không thể thiếu cho những người mua sắm trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers. Đánh giá sản phẩm chân thật.')
@section('fb_img', asset('icons/launcher-icon-4x.png'))

@section('css')

@endsection

@section('content')
    <div class="page-content col-lg-9 mb-4 animated fadeInLeft">
        <div class="title"><h1>Tính Năng & Phiên Bản Ứng Dụng</h1></div>
        <div class="article">
            <h2>v1.4.alpha (07/01/2019)</h2>
            <p>Thêm chức năng:</p>
            <ul>
                <li>Trang <a href="https://page.khocoupon.net" target="_blank" title="Deal HOT liệt kê sản phẩm giảm giá mạnh">Deal HOT</a> liệt kê sản phẩm giảm giá mạnh.</li>
            </ul>

            <h2>v1.3.alpha (03/01/2019)</h2>
            <p>Thêm chức năng:</p>
            <ul>
                <li>Trình tạo <a href="https://page.khocoupon.net" target="_blank" title="Tạo landing page online - landing page miễn phí">Landing Page Online</a> Miễn Phí.</li>
            </ul>

            <h2>v1.2.alpha (29/12/2018)</h2>
            <p>Thêm chức năng:</p>
            <ul>
                <li>Danh sách bài viết theo danh mục.</li>
                <li>Công cụ tìm kiếm dữ liệu website trên google.</li>
                <li>Tối ưu tốc độ tải trang.</li>
            </ul>

            <h2>v1.1.alpha (25/12/2018)</h2>
            <p>Thêm chức năng:</p>
            <ul>
                <li>Chuyên mục tin tức.</li>
                <li>Thích, chia sẽ, bình luận bài viết</li>
            </ul>

            <h2>v1.0.alpha (20/12/2018) Phiên bản thử nghiệm</h2>
            <p>Chức năng:</p>
            <ul>
                <li>Liệt kê danh sách khuyến mãi mới nhất.</li>
                <li>Tìm kiếm khuyến mãi theo nhà cung cấp.</li>
                <li>Giao diện thân thiện với thiết bị di dộng.</li>
                <li>Thêm trang <a href="{{ url('/sitemap.xml') }}">sơ đồ website</a>.</li>
            </ul>
        </div>
    </div>
    <!-- Sidebar -->
    @include('partials.sidebar')

@endsection

@section('advanced-filter')
    @include('partials.advanced-filter')
@endsection

@section('js')

@endsection