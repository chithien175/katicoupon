<div class="row">
    @foreach($promotions as $promotion)
        <div class="col-lg-12">
            <div class="item-group">
                <div class="float-right info">
                    @php
                        $current = Carbon\Carbon::now();
                        $future = $promotion['end_time'];
                    @endphp
                    <!-- <div class="recommended"><i class="icon-check far fa-check-square"></i> Đã xác nhận</div> -->
                    <div class="end_time"><i class="icon-clock far fa-clock"></i> Còn {{ $current->diffInDays($future) + 1 }} ngày</div>
                </div>
                <div class="title">
                    <h5>
                        <a href="{{ route('merchant-filter', $promotion['merchant']) }}" class="merchant">[{{ $promotion['merchant'] }}]</a>
                    </h5>
                    <h5 class="">
                        <a href="{{ $promotion['aff_link'] }}" class="name" target="_blank">{{ $promotion['name'] }}</a>
                    </h5>
                </div>
            </div>
        </div>
    @endforeach
</div>