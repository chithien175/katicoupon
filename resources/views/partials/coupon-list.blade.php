<div class="row">
    @foreach($coupons as $coupon)
        <div class="col-lg-12">
            <div class="item-group">
                <div class="float-right info">
                    @php
                        $current = Carbon\Carbon::now();
                        $future = $coupon['end_time'];
                    @endphp
                    <div class="end_time"><i class="icon-clock far fa-clock"></i> Còn {{ $current->diffInDays($future) + 1 }} ngày</div>
                </div>
                <div class="title">
                    <h5>
                        <a href="{{ route('merchant-filter', $coupon['merchant']) }}" class="merchant">[{{ $coupon['merchant'] }}]</a>
                    </h5>
                    <h5 class="">
                        <a href="{{ $coupon['aff_link'] }}" class="name" target="_blank">{{ $coupon['name'] }}</a>
                    </h5>
                    @foreach($coupon['coupons'] as $value)
                        - {{ $value['coupon_save'] }}
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>