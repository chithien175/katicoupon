@foreach($promotions as $promotion)
    <div class="item-group">
        <div class="des">
            <h5>
                <a href="{{ route('merchant-filter', $promotion['merchant']) }}" class="merchant"><i class="fas fa-store"></i> [{{ $promotion['merchant'] }}]</a>
            </h5>
            <h5>
                <a href="javascript:void(0)" class="name click-aff-link" data-aff-link="{{ $promotion['aff_link'] }}">{{ $promotion['name'] }}</a>
            </h5>
        </div>
        @if(empty($promotion['coupons']))
        <div class="aff-link-button">
            <a class="click-aff-link" href="javascript:void(0)" data-aff-link="{{ $promotion['aff_link'] }}"><i class="fas fa-tag"></i> CHI TIẾT</a>
        </div>
        @else
        <div class="get-coupon-button">
            <a class="click-get-coupon" href="javascript:void(0)"><i class="fas fa-cut"></i> LẤY MÃ</a>
        </div>
        @endif
        @php
            $current = Carbon\Carbon::now();
            $future = $promotion['end_time'];
        @endphp
        <div class="end_time"><i class="icon-green far fa-clock"></i> Còn {{ $current->diffInDays($future) + 1 }} ngày</div>
    </div>
@endforeach