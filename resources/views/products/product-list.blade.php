<div class="items">
    @foreach($products as $key => $product)
        @php
            $product_url = urlencode('https://tiki.vn/' . $product->product->url_path);
        @endphp
        <a href="javascript:void(0)" data-aff-product="https://fast.accesstrade.com.vn/deep_link/4442469589028652896?url={{ $product_url }}" class="deal-item click-aff-product">
            <div class="thumb">
                <img src="{{ $product->product->thumbnail_url }}" alt="{{ $product->product->name }}">
            </div>
            <div class="title">
                {{ $product->product->name }}
            </div>
            <div class="price">
                {{ number_format($product->product->price,0,",",".") }}₫<br>
                <span class="price-regular">{{ number_format($product->product->list_price,0,",",".") }}₫</span>
                @php
                    $discount = $product->product->price/$product->product->list_price;
                @endphp
                <span class="discount">-{{ round((1 - $discount)*100, 0) }}%</span>
            </div>
            <div class="deal-status">
                <div class="started">
                    <div class="deal-count-down">
                        <span class="time" data-countdown="{{ date('Y/m/d', $product->special_to_date) }}"></span>
                    </div>
                </div>
                <div class="process-bar">
                    <div style="width: {{ 100 - $product->progress->percent }}%;"></div>
                    @if($product->progress->percent < 15)
                        <span class="text">Sắp bán hết</span>
                    @else
                        <span class="text">Đã bán {{ $product->progress->qty_ordered }}</span>
                    @endif
                </div>
            </div>
        </a>
    @endforeach
</div>