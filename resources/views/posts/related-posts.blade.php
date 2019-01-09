<div class="related-posts">
    <h2>Xem thêm</h2>
    <ul>
        @foreach($relatedPosts as $related_post)
        <li>
            <a href="{{ route('post-detail', [$related_post->slug, $related_post->id]) }}">{{ $related_post->title }}</a>
        </li>
        @endforeach
    </ul>
</div>