<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <meta name="description" content="{{ucwords(@$setting_data->meta_description ?? '')}}"/>
    <meta name="keywords" content=" {{@$setting_data->meta_tags ?? ''}}">

    @if (\Request::is('/'))
        <title> {{ucwords($setting_data->title ?? '')}}</title>
    @else
        <title>@yield('title') |  {{ucwords($setting_data->title ?? '')}} </title>
    @endif

    <!-- favicons Icons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ $setting_data->favicon ?  asset(imagePath($setting_data->favicon)) : ''}}">

    <meta property="og:title" content="{{ucwords(@$setting_data->meta_title ?? '')}}" />
    <meta property="og:type" content="Consultancy" />
    <meta property="og:url" content="#" />
    <meta property="og:site_name" content="{{ucwords($setting_data->title ?? '')}}" />
    <meta property="og:description" content="{{ucwords(@$setting_data->meta_description ?? '')}}" />

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,900;9..40,1000&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/tiny-slider/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/floens-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/swiper/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/slick/slick.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/floens.css') }}" />
    <script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{@$setting_data->google_analytics}}');
    </script>

    @yield('css')
    @stack('styles')
</head>

<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

@if (\Request::is('/'))
    <div class="preloader">
        <div class="preloader__image" style="background-image: url({{ $setting_data->favicon ?  asset(imagePath($setting_data->favicon)) : ''}});"></div>
    </div>
@endif
<!-- /.preloader -->
<div class="page-wrapper">
    <div class="topbar-one">
        <div class="container-fluid">
            <div class="topbar-one__inner">
                <ul class="list-unstyled topbar-one__info">
                    <li class="topbar-one__info__item">
                        <span class="icon-paper-plane"></span>
                        <a href="mailto:{{ $setting_data->email ?? '' }}">{{ $setting_data->email ?? '' }}</a>
                    </li>
                    <li class="topbar-one__info__item">
                        <span class="icon-phone-call"></span>
                        <a href="tel:{{ $setting_data->phone ?? $setting_data->mobile }}">{{ $setting_data->phone ?? $setting_data->mobile }}</a>
                    </li>
                    <li class="topbar-one__info__item">
                        <span class="icon-location"></span>
                        <address>{{ $setting_data->address ?? '' }}</address>
                    </li>
                </ul><!-- /.list-unstyled topbar-one__info -->
                <div class="topbar-one__right">
                    <div class="topbar-one__social">
                        @if(@$setting_data->facebook)
                            <a href="{{$setting_data->facebook}}">
                                <i class="icon-facebook" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                        @endif
                        @if(@$setting_data->instagram)
                            <a href="{{$setting_data->instagram}}">
                                <i class="icon-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        @endif
                        @if(@$setting_data->youtube)
                            <a href="{{$setting_data->youtube}}">
                                <i class="icon-youtube" aria-hidden="true"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        @endif
                        @if(@$setting_data->linkedin)
                            <a href="{{$setting_data->linkedin}}">
                                <i class="icon-linkedin" aria-hidden="true"></i>
                                <span class="sr-only">LinkedIn</span>
                            </a>
                        @endif
                        @if(!empty(@$setting_data->ticktock))
                                <a href="{{$setting_data->linkedin}}">
                                    <i class="fab fa-tiktok" aria-hidden="true"></i>
                                    <span class="sr-only">Tiktok</span>
                                </a>
                        @endif
                    </div><!-- /.topbar-one__social -->
                </div><!-- /.topbar-one__right -->
            </div><!-- /.topbar-one__inner -->
        </div><!-- /.container-fluid -->
    </div><!-- /.topbar-one -->

    <header class="main-header main-header--two sticky-header sticky-header--normal">
        <div class="container-fluid">
            <div class="main-header__inner">
                <div class="main-header__left">
                    <div class="main-header__logo">
                        <a href="/">
                            <img src="{{ $setting_data->logo ?  asset(imagePath($setting_data->logo)) : asset(imagePath($setting_data->logo_white))}}" alt="" width="225">
                        </a>
                    </div><!-- /.main-header__logo -->
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            @if(!empty($top_nav_data))
                                @foreach($top_nav_data as $nav)
                                    @if(!empty($nav->children[0]))
                                        <li class="dropdown">
                                            <a href="#">{{ @$nav->name ?? @$nav->title }} </a>
                                            <ul>
                                                @foreach($nav->children[0] as $childNav)
                                                    <li>
                                                        <a href="{{get_menu_url($childNav->type, $childNav)}}">
                                                            {{ @$childNav->name ?? @$childNav->title ??''}}
                                                        </a>
                                                        @if(!empty($childNav->children[0]))
                                                            <ul>
                                                                @foreach($childNav->children[0] as $key => $lastchild)
                                                                    <li>
                                                                        <a href="{{get_menu_url($lastchild->type, $lastchild)}}" target="{{@$lastchild->target ? '_blank':''}}">
                                                                            {{ @$lastchild->name ?? @$lastchild->title ?? ''}}
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                {{ @$nav->name ?? @$nav->title ??''}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="main-header__right">
                    <div class="mobile-nav__btn mobile-nav__toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <a href="#" class="search-toggler main-header__search">
                        <i class="icon-search1" aria-hidden="true"></i>
                        <span class="sr-only">Search</span>
                    </a>

                    <a href="{{route('frontend.contact-us')}}" class="floens-btn main-header__btn">
                        <span>Contact Us</span>
                        <i class="icon-right-arrow"></i>
                    </a>

                    <button class="main-header__sidebar-btn sidebar-btn__toggler">
                        <span class="main-header__sidebar-btn__box"></span>
                        <span class="main-header__sidebar-btn__box"></span>
                        <span class="main-header__sidebar-btn__box"></span>
                    </button><!-- /.main-header__sidebar-btn -->
                </div><!-- /.main-header__right -->
            </div><!-- /.main-header__inner -->
        </div><!-- /.container-fluid -->
    </header>
