@extends('layouts.master')

@section('title', 'Miễn Trừ Trách Nhiệm Tại khocoupon.net')
@section('description', 'Ứng dụng không thể thiếu cho những người mua sắm trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers. Đánh giá sản phẩm chân thật.')
@section('keywords', '')

@section('fb_url', route('term'))
@section('fb_type', 'website')
@section('fb_title', 'Miễn Trừ Trách Nhiệm Tại khocoupon.net')
@section('fb_des', 'Ứng dụng không thể thiếu cho những người mua sắm trực tuyến. Cập nhật mã giảm giá, phiếu khuyến mãi, coupons, vouchers. Đánh giá sản phẩm chân thật.')
@section('fb_img', asset('icons/launcher-icon-4x.png'))

@section('css')

@endsection

@section('content')
<div class="page-content col-lg-9 mb-4 animated fadeInLeft">
    <div class="title"><h1>Miễn trừ trách nhiệm</h1></div>
    <div class="article">
        <p>
            Thông tin trên ứng dụng này được viết bởi cá nhân chủ ứng dụng và chỉ mang tính chất tham khảo. Bạn phải chịu hoàn toàn trách nhiệm về các thông tin mà bạn cho là tin tưởng và phù hợp.
        </p>
        <p>
            Trong bất kỳ trường hợp nào, tôi không chịu trách nhiệm về bất kỳ mất mát trực tiếp hay gián tiếp nào của bạn phát sinh từ việc sử dụng ứng dụng này.
        </p>
        <p>
            Một số đường dẫn (URL) ra những trang website bên ngoài trong ứng dụng này nằm ngoài khả năng kiểm soát của tôi. Tôi không kiểm soát nội dung, hình ảnh hay tính sẵn có của các website/links đó. Việc sử dụng các links/website đó trên ứng dụng này không ngụ ý hay đại diện cho quan điểm, đề xuất mà họ cung cấp.
        </p>
        <p>
            Tôi cố gắng giữ cho ứng dụng này luôn hoạt động bình thường nhưng trong một vài trường hợp bất khả kháng liên quan đến kỹ thuật như đường truyền, hosting… nằm ngoài khả năng của tôi, tôi sẽ không chịu trách nhiệm nhưng sẽ thông báo đến các bạn ngay lập tức và có giải pháp thay thế phù hợp.
        </p>
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