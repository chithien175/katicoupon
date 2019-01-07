<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top animated fadeInDown">
    <img class="mai-vang" src="{{ asset('/images/mai.png') }}" alt="khocoupon.net">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('logox200.png') }}" alt="khocoupon.net">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('deal-hot') }}">Deal Hot</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                Tin tức
                </a>
                @php
                    $categories = getAllCategories();
                @endphp
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($categories as $category)
                    <a class="dropdown-item" href="{{ route('post-by-cate', $category->slug) }}">{{ $category->name }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                Công cụ
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://page.khocoupon.net" target="_blank">Tạo Landing Page</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get" id="search_form_top" action="https://www.google.com.vn/search" target="_blank" onsubmit="jQuery('#q').val('site:khocoupon.net ' + jQuery('#q_tmp').val())">
            <input class="form-control mr-sm-2" type="text" placeholder="Bạn cần tìm gì?" value="" onkeypress="" autocomplete="off" id="q_tmp">
            <input type="hidden" name="q" id="q" value="site:khocoupon.net ">
            <button class="btn btn-outline my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</nav>