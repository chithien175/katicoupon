<div class="related-posts">
    <h2>Tin liên quan</h2>
    <ul>
        @foreach($relatedPosts as $related_post)
        <li>
            <a href="">{{ $related_post->title }}</a>
        </li>
        @endforeach
    </ul>
</div>