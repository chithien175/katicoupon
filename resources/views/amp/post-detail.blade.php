<!doctype html>
<html amp lang="vi">
	<head>
		<meta charset="utf-8">
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<title>{{ $post->seo_title }}</title>
		<link rel="canonical" href="{{ route('post-detail',[$post->slug, $post->id]) }}">
		<link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<script type="application/ld+json">
			{
			"@context": "http://schema.org",
			"@type": "NewsArticle",
			"mainEntityOfPage":{
			"@type":"WebPage",
			"@id":"{{ route('amp-post-detail', [$post->slug, $post->id]) }}"
			},
			"headline": "{{ $post->seo_title }}",
			"image": {
			"@type": "ImageObject",
			"url": "{{ Voyager::image($post->thumbnail('medium')) }}"
			},
			"datePublished": "{{ $post->created_at }}",
			"dateModified": "{{ $post->created_at }}",
			"author": {
			"@type": "Person",
			"name": "KhoCoupon.Net"
			},
			"publisher": {
			"@type": "Organization",
			"name": "⚡ KhoCoupon.Net",
			"logo": {
				"@type": "ImageObject",
				"url": "{{ asset('/icons/launcher-icon-4x.png') }}",
				"width": "192px",
				"height": "192px"
			}
			},
			"description": "{{ $post->meta_description }}"
			}
			</script>
		<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
		<style amp-custom>
			/* any custom style goes here */
			body {
				background-color: #eff3f6;
				padding: 10px;
			}
			header {
				background: tomato;
				color: white;
				font-size: 2em;
				text-align: center;
			}
			p {
				text-align: justify;
				font-size: 16px;
				line-height: 1.2;
			}
			h1{
				text-align: justify;
				line-height: 1.2;
				color: #17a2b8;
			}
		</style>
		<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
	</head>
	<body>
		<header>
			<a href="{{ route('home') }}" target="_blank">KhoCoupon.Net</a>
		</header>
		<article>
			<h1>{{ $post->title }}</h1>
			{!! _domradio_util_ampify_img($post->body) !!}
		</article>
		<footer>
			@if($relatedPosts->count() > 0)
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
			@endif
		</footer>
		
	</body>
</html>