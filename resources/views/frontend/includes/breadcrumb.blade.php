<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ isset($page_image) && $page_image  ? asset(imagePath($page_image)) :
        asset('assets/frontend/images/backgrounds/'.$breadcrumb_image) }});"></div>
    <div class="container">
        <h2 class="page-header__title">{{ $page_title }}</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="/">Home</a></li>
            @if($page_method !=='index')
                <li><i class="icon-flag"></i> <a href="{{route($base_route.'index')}}">{{ $page }}</a></li>
                <li><span>{{ $page_title }}</span></li>
            @else
                <li><span>{{ $page_title }}</span></li>
            @endif
        </ul>
    </div>
</section>
