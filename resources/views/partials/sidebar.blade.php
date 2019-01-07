<div id="sidebar" class="col-lg-3 animated fadeInRight">
    <ul class="nav nav-tabs" id="topReviews" role="tablist">
        <li class="nav-item">
            <h2>
                <a class="nav-link active" id="top-reviews-tab" data-toggle="tab" href="{{ route('home') }}" role="tab" aria-controls="top-merchant" aria-selected="true"><i class="far fa-comments mr-2 bell"></i> <span class="color-warning">TIN </span>MỚI NHẤT</a>
            </h2>
        </li>
    </ul>
    <div class="tab-content" id="topReviewsContent">
        <div class="tab-pane fade show active" id="top-reviews" role="tabpanel" aria-labelledby="top-reviews-tab">
            @php
                $review_posts = getAllPosts('*', 'created_at', 'desc', 6);
                $dem = 1;
                $array1 = [];
                $array2 = [];
            @endphp

            @foreach($review_posts as $key => $review_post)
                @if($dem <=3)
                    @php array_push($array1, $review_posts[$key]); @endphp
                @else
                    @php array_push($array2, $review_posts[$key]); @endphp
                @endif
                @php $dem++; @endphp
            @endforeach
            
            <ul class="col-left">
                @foreach($array1 as $review_post)
                    <li>
                        <a href="{{ route('post-detail', [$review_post->slug, $review_post->id]) }}">
                            <div class="thumb">
                                <img src="{{ Voyager::image($review_post->thumbnail('small')) }}" alt="{{ $review_post->title }}">
                            </div>
                            <h2 class="title">
                                {{ $review_post->title }}
                            </h2>
                        </a>
                    </li>
                @endforeach
            </ul>
            <ul class="col-right">
                @foreach($array2 as $review_post)
                    <li>
                        <a href="{{ route('post-detail', [$review_post->slug, $review_post->id]) }}">
                            <div class="thumb">
                                <img src="{{ Voyager::image($review_post->thumbnail('small')) }}" alt="{{ $review_post->title }}">
                            </div>
                            <h2 class="title">
                                {{ $review_post->title }}
                            </h2>
                        </a>
                    </li>
                @endforeach
                <!-- Ads -->
                <li>
                    <a href="http://member.civi.vn/cpc/?sid=75691&bid=10054012" target="_blank">
                        <div class="thumb">
                            <img src="{{ asset('/images/ads/10054008_580x400_phuc_khang.jpg') }}" alt="Gai Cột Sống, Gai Đốt Sống Cổ - Đã Có Cách Chữa Hiệu Quả 100%‎">
                        </div>
                        <h2 class="title">
                            Gai Cột Sống, Gai Đốt Sống Cổ - Đã Có Cách Chữa Hiệu Quả 100%‎
                        </h2>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div> 