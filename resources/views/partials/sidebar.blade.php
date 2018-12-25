<div id="sidebar" class="col-lg-3 animated fadeInRight">
    <ul class="nav nav-tabs" id="topReviews" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="top-reviews-tab" data-toggle="tab" href="#top-reviews" role="tab" aria-controls="top-merchant" aria-selected="true"><i class="far fa-comments mr-2 bell"></i> <span class="color-warning">ĐÁNH GIÁ </span>MỚI</a>
        </li>
    </ul>
    <div class="tab-content" id="topReviewsContent">
        <div class="tab-pane fade show active" id="top-reviews" role="tabpanel" aria-labelledby="top-reviews-tab">
            @php
                $review_posts = getAllPosts($select='*', 1, 'created_at', 'desc', 3);
            @endphp
            <ul>
                @foreach($review_posts as $review_post)
                    <li>
                        <div class="thumb">
                            <a href="{{ route('post-detail', [$review_post->slug, $review_post->id]) }}">
                                <img src="{{ Voyager::image($review_post->thumbnail('small')) }}" alt="{{ $review_post->title }}">
                            </a>
                        </div>
                        <h2 class="title">
                            <a href="{{ route('post-detail', [$review_post->slug, $review_post->id]) }}">{{ $review_post->title }}</a>
                        </h2>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div> 