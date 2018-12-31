<div id="sidebar" class="col-lg-3 animated fadeInRight">
    <ul class="nav nav-tabs" id="topReviews" role="tablist">
        <li class="nav-item">
            <h2>
                <a class="nav-link active" id="top-reviews-tab" data-toggle="tab" href="#top-reviews" role="tab" aria-controls="top-merchant" aria-selected="true"><i class="far fa-comments mr-2 bell"></i> <span class="color-warning">TIN </span>NỔI BẬT</a>
            </h2>
        </li>
    </ul>
    <div class="tab-content" id="topReviewsContent">
        <div class="tab-pane fade show active" id="top-reviews" role="tabpanel" aria-labelledby="top-reviews-tab">
            @php
                $review_posts = getAllPosts('*', 'created_at', 'desc', 4);
                foreach($review_posts as $key => $review_post){
                    if($key == 0 || $key == 1){
                        $array1[] = $review_posts[$key];
                    }else{
                        $array2[] = $review_posts[$key];
                    }
                }
            @endphp
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
            </ul>
        </div>
    </div>
</div> 