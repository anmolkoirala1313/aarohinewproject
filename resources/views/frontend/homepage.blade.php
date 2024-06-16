@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup {
            background: transparent;
            width: 80%;
            height: auto; /* Set height to auto */
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1000;
        }

        .popup-header {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .popup-close {
            cursor: pointer;
            font-size: 35px; /* Increase the size of the close button */
            color: #042a54;
        }

        .popup-content {
            text-align: center;
        }

        .popup-content img {
            max-width: 100%;
            max-height: 100%;
        }

        .owl-carousel .owl-stage-outer {
            display: flex;
        }

        .owl-carousel .owl-stage {
            display: flex;
            align-items: stretch; /* Ensure all items stretch to the same height */
        }

        .owl-carousel .owl-item {
            display: flex;
            align-items: stretch; /* Ensure the content inside items also stretches */
        }

        .owl-carousel .item {
            display: flex;
            flex: 1 1 auto; /* Allow the items to stretch */
            flex-direction: column; /* If you want vertical alignment within the item */
        }
    </style>
@endsection
@section('content')
    <!-- main slider start -->
    <section class="main-slider-two hero-slider">
        <div class="main-slider-two__carousel floens-slick__carousel--with-counter" data-slick-options='{
		"slidesToShow": 1,
		"slidesToScroll": 1,
		"autoplay": true,
		"autoplaySpeed": 3000,
		"fade": true,
		"speed": 2000,
		"infinite": true,
		"arrows": true,
		"dots": false,
		"prevArrow": "<button class=\"hero-slider__slick-button hero-slider__slick-button--prev\">Prev <i class=\"icon-right-arrow\"><i></button>",
		"nextArrow": "<button class=\"hero-slider__slick-button hero-slider__slick-button--next\">Next <i class=\"icon-right-arrow\"><i></button>"

	}'>
            @foreach($data['sliders']  as $index=>$slider)

                @php [$remaining, $last] = splitWordsFromEnd($slider->subtitle, 3);
                @endphp
                <div class="main-slider-two__item">
                    <div class="main-slider-two__bg" style="background-image: url({{ asset(imagePath($slider->image)) }});"></div>
                    <!-- /.main-slider-two__bg -->
                    <div class="main-slider-two__wrapper container">
                        <div class="main-slider-two__left">
                            <div class="main-slider-two__content">
                                <p class="main-slider-two__tagline">{{ $slider->title ?? '' }}</p>
                                <!-- /.main-slider-two__tagline -->
                                <h2 class="main-slider-two__title">{{ $slider->subtitle  ?? ''}}</h2>
                                @if($slider->link)
                                    <a href="{{ $slider->link ?? '' }}" class="main-slider-two__btn floens-btn">
                                        <span>  {{ $slider->button ?? 'Learn More' }}</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                @endif
                            </div><!-- /.main-slider-two__content -->
                        </div><!-- /.main-slider-two__left -->
                    </div><!-- /.main-slider-two__wrapper .container -->
                </div>
            @endforeach
        </div><!-- /.my-slider -->
    </section><!-- /.main-slider-two -->
    <!-- main slider end -->

    @if(count( $data['clients']) > 0)
        <div class="client-carousel client-carousel--two">
            <div class="container">
                <div class="client-carousel__one floens-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 5,
                "margin": 45,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": 6000,
                "nav":false,
                "dots":false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "responsive":{
                    "0":{
                        "items": 2,
                        "margin": 30
                    },
                    "500":{
                        "items": 3,
                        "margin": 40
                    },
                    "768":{
                        "items": 4,
                        "margin": 50
                    },
                    "992":{
                        "items": 5,
                        "margin": 70
                    },
                    "1200":{
                        "items": 5,
                        "margin": 129
                    }
                }
                }'>
                    @foreach($data['clients'] as $index=>$client)
                        <div class="client-carousel__one__item">
                            <img src="{{ asset(imagePath($client->image)) }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div><!-- /.container -->
        </div>
    @endif

    @if(count($data['jobs']) > 0)
        <section class="services-two section-space-two">
            <div class="container">
                <div class="services-two__top">
                    <div class="row gutter-y-50 align-items-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="sec-title @@extraClassName">
                                <h6 class="sec-title__tagline">demands</h6>
                                <h3 class="sec-title__title">We Provides Best Jobs Demands for you</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="services-two__carousel floens-owl__carousel floens-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                    "items": 1,
                    "margin": 0,
                    "loop": true,
                    "smartSpeed": 700,
                    "nav": true,
                    "navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
                    "dots": false,
                    "autoplay": 600,
                    "responsive":{
                        "0":{
                            "items": 1,
                            "margin": 15
                        },
                        "576":{
                            "items": 1,
                            "margin": 15
                        },
                        "768":{
                            "items": 2,
                            "margin": 30
                        },
                        "992":{
                            "items": 2,
                            "margin": 30
                        },
                        "1200":{
                            "items": 3,
                            "margin": 30
                        },
                        "1400":{
                            "items": 3,
                            "margin": 30
                        },
                        "1600":{
                            "items": 4,
                            "margin": 30
                        }
                    }
                }'>
                    @foreach($data['jobs'] as $index=>$job)
                        <div class="item">
                            <div class="service-card-two">
                                <div class="service-card-two__bg" style="background-image: url({{asset('assets/frontend/images/services/service-bg-2-1.png')}});"></div>
                                <div class="service-card-two__image">
                                    <img src="{{ asset(imagePath($job->image)) }}" alt="" style="width: 390px; height: 305px; object-fit: cover">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title">
                                        <a href='{{ route('frontend.job.show', $job->slug) }}'>
                                            {{ $job->title ?? '' }}
                                        </a>
                                    </h3><!-- /.service-card-two__title -->
                                    <div class="service-card-two__bottom">
                                        <a href='{{ route('frontend.job.show', $job->slug) }}' class="service-card-two__link floens-btn">
                                            <span>demand details</span>
                                            <i class="icon-right-arrow"></i>
                                        </a>
                                        <span class="service-card-two__icon icon-newspaper1"></span>
                                    </div><!-- /.service-card-two__bottom -->
                                </div><!-- /.service-card-two__content -->
                            </div><!-- /.service-card-two -->
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if($data['homepage']->description)
        <section class="about-two section-space">
            <div class="about-two__bg" style="background-image: url({{ asset('assets/frontend/images/backgrounds/about-bg-2-1.png') }});"></div>
            <!-- /.about-two__bg -->
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6 {{ $data['homepage']->image_position == 'left' ? 'wow fadeInLeft':'' }}" data-wow-duration="1500ms" data-wow-delay="00ms">
                        @if($data['homepage']->image_position == 'left')
                            @include($module.'partials.welcome_image')
                        @else
                            @include($module.'partials.welcome_description')
                        @endif
                    </div>
                    <div class="col-lg-6 {{ $data['homepage']->image_position == 'right' ? 'wow fadeInLeft':'' }}" data-wow-duration="1500ms" data-wow-delay="00ms">
                        @if($data['homepage']->image_position == 'right')
                            @include($module.'partials.welcome_image')
                        @else
                            @include($module.'partials.welcome_description')
                        @endif
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    @endif

    @if($data['homepage']->mission)
        <section class="offer-one section-space-two" id="offer">
            <div class="container">
                <div class="offer-one__top">
                    <div class="row gutter-y-40 align-items-center">
                        <div class="col-lg-8">
                            <div class="sec-title @@extraClassName">
                                <h6 class="sec-title__tagline">Up Close</h6>
                                <h3 class="sec-title__title">Discover Our Moral Values And Ethics
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="offer-one__main-tab-box tabs-box">
                    <div class="offer-one__main-tab-box__bg" style="background-image: url({{ asset('assets/frontend/images/backgrounds/background-2.png') }});"></div>
                    <div class="tab-box-buttons wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <ul class="tab-buttons">
                            <li data-tab="#ourMission" class="tab-btn active-btn">
                                <button type="button" class="tab-btn__inner">Mission <span class="tab-btn__icon icon-right-arrow"></span></button>
                            </li>
                            <li data-tab="#ourVisionValue" class="tab-btn">
                                <button type="button" class="tab-btn__inner">Vision & Value <span class="tab-btn__icon icon-right-arrow"></span></button>
                            </li>
                            <li data-tab="#ourPEtheics" class="tab-btn">
                                <button type="button" class="tab-btn__inner">Professional Ethics <span class="tab-btn__icon icon-right-arrow"></span></button>
                            </li>
                        </ul><!-- /.tab-buttons -->
                    </div><!-- /.tab-box-buttons -->
                    <div class="tabs-content wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" id="ourMission" style="display: block;">
                            <div class="offer-one__service">
                                <div class="offer-one__service__content">
                                    <h3 class="offer-one__service__title">Mission</h3>
                                    <p class="offer-one__service__text">
                                        {{ $data['homepage']->mission ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab fadeInUp animated" data-wow-delay="200ms" id="ourVisionValue">
                            <div class="offer-one__service">
                                <div class="offer-one__service__content">
                                    <h3 class="offer-one__service__title">Vision & Value </h3>
                                    <p class="offer-one__service__text"> {{ $data['homepage']->vision ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab fadeInUp animated" data-wow-delay="200ms" id="ourPEtheics">
                            <div class="offer-one__service">
                                <div class="offer-one__service__content">
                                    <h3 class="offer-one__service__title">Professional Ethics </h3>
                                    <p class="offer-one__service__text"> {{ $data['homepage']->value ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($data['services']) > 0)
        <section class="services-one">
            <div class="services-one__bg" style="background-image: url({{ asset('assets/frontend/images/backgrounds/services-bg-1.png') }});"></div>
            <div class="container">
                <div class="services-one__top">
                    <div class="row gutter-y-50 align-items-center">
                        <div class="col-lg-7 col-md-10">
                            <div class="sec-title @@extraClassName">
                                <h6 class="sec-title__tagline">categories</h6>
                                <h3 class="sec-title__title">We Provides Best Categories For You</h3>
                            </div>
                        </div><!-- /.col-lg-7 -->
                        <div class="col-lg-5">
                            <div class="services-one__top__button">
                                <a href="{{ route('frontend.service.index') }}" class="floens-btn services-one__top__btn">
                                    <span>view all</span>
                                    <i class="icon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid services-one__container">
                <div class="services-one__carousel floens-owl__carousel floens-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                    "items": 1,
                    "margin": 0,
                    "loop": true,
                    "smartSpeed": 700,
                    "stagePadding": 100,
                    "nav": false,
                    "navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
                    "dots": false,
                    "autoplay": 600,
                    "responsive":{
                        "0":{
                            "items": 1,
                            "stagePadding": 0,
                            "margin": 15
                        },
                        "530":{
                            "items": 1,
                            "stagePadding": 70,
                            "margin": 30
                        },
                        "576":{
                            "items": 1,
                            "stagePadding": 110,
                            "margin": 30
                        },
                        "768":{
                            "items": 2,
                            "stagePadding": 50,
                            "margin": 30
                        },
                        "992":{
                            "items": 2,
                            "stagePadding": 110,
                            "margin": 30
                        },
                        "1200":{
                            "items": 2,
                            "stagePadding": 200,
                            "margin": 30
                        },
                        "1400":{
                            "items": 3,
                            "stagePadding": 130,
                            "margin": 30
                        },
                        "1600":{
                            "items": 3,
                            "stagePadding": 260,
                            "margin": 30
                        },
                        "1830":{
                            "items": 3,
                            "stagePadding": 375,
                            "margin": 30
                        }
                    }
                }'>
                    @foreach($data['services'] as $index=>$service)
                        <div class="item">
                            <div class="service-card">
                                <div class="service-card__bg"></div>
                                <div class="service-card__top">
                                    <div class="service-card__image">
                                        <img src="{{ asset(thumbnailImagePath($service->image)) }}" alt="">
                                    </div>
                                </div>
                                <div class="service-card__content">
                                    <h3 class="service-card__title">
                                        <a href='{{ route('frontend.service.show', $service->key) }}'>
                                            {{ $service->title ?? '' }}</a>
                                    </h3>
                                    <p class="service-card__text">
                                       {{ elipsis( strip_tags($service->description) ) }}</p>
                                    <a href='{{ route('frontend.service.show', $service->key) }}' class="service-card__btn floens-btn floens-btn--border">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="services-one__cursor">
                    <i class="icon-arrow-left"></i>
                    <span class="services-one__cursor__text">DRAG</span>
                    <i class="icon-arrow-right"></i>
                </div>
            </div>
        </section>
    @endif

    @if(count($data['homepage']->coreValueDetail))
        <section class="pricing-page section-space" style="padding-bottom: 70px;">
            @php [$remaining, $last] = splitWordsFromEnd($data['homepage']->core_title, 3);
            @endphp
        <div class="container">
            <div class="sec-title sec-title--center">
                <h6 class="sec-title__tagline">   {{ $data['homepage']->core_subtitle ?? '' }}</h6>
                <h3 class="sec-title__title">{{ $remaining ?? '' }} <br/> {{ $last ?? '' }}</h3><!-- /.sec-title__title -->
            </div>
            <div class="pricing-page__main-tab-box tabs-box">
                <div class="row gutter-y-30 fadeInUp animated" data-wow-delay="200ms">
                    @foreach($data['homepage']->coreValueDetail as $index=>$core_value)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="pricing-card">
                                <div class="pricing-card__top">
                                    <div class="pricing-card__top__content" style="text-align: center;">
                                        <span class="service-card-two__icon {{ core_value_icon($index) }}"></span>
                                        <h2 class="pricing-card__title">{{ $core_value->title ?? '' }}</h2>
                                    </div>
                                    <div class="pricing-card__top__bg" style="background-image: url({{ asset('assets/frontend/images/pricing/pricing-t-bg-1-2.jpg') }});">
                                    </div>
                                </div>
                                <div class="pricing-card__content h-100">
                                    <p class="pricing-card__text pricing-card__list text-align-justify">
                                        {{ $core_value->description ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

    @if($data['homepage']->action_title)
        <section class="services-one__info">
            <div class="container">
                <div class="services-one__info__inner" style="background-color: #98928f">
                    <div class="services-one__info__bg" style="background-image: url({{ asset('assets/frontend/images/backgrounds/cta-1.png') }});"></div>
                    <div class="row gutter-y-40 align-items-center">
                        <div class="col-lg-6">
                            <div class="services-one__info__left">
                                <h3 class="services-one__info__title">{{ $data['homepage']->action_title ?? '' }}</h3>
                                <p class="services-one__info__text">{{ $data['homepage']->action_subtitle ?? '' }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-one__info__right">
                                <div class="services-one__info__right__inner">
                                    <div class="services-one__info__icon">
                                        <a href="tel:{{ $data['setting']->phone ?? $data['setting']->mobile ?? '' }}">
                                            <span class="icon-telephone" style="line-height: 1.5;"></span>
                                        </a>
                                    </div>
                                    @if ( $data['homepage']->action_link )
                                        <a href="{{ $data['homepage']->action_link }}" class="projects-one__btn floens-btn floens-btn--border">
                                            <span>{{ $data['homepage']->action_button ?? 'Contact Us' }}</span>
                                            <i class="icon-right-arrow"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-one__info__shape-one"></div>
                    <div class="services-one__info__shape-two"></div>
                </div>
            </div>
        </section>
    @endif

    @if(count($data['homepage']->recruitmentProcess))
        <section class="work-process section-space-two" style="padding-top: 50px;">
            <div class="work-process__container-top container">
                <div class="sec-title sec-title--center">
                    <h6 class="sec-title__tagline">{{ $data['homepage']->recruitment_subtitle  ?? ''}}</h6>
                    <h3 class="sec-title__title">{{  $data['homepage']->recruitment_title ?? ''}}</h3>
                </div>
            </div>
            <div class="work-process__container container">
                <div class="row gutter-y-40">
                    @foreach($data['homepage']->recruitmentProcess as $index=>$process)
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="{{ $index * 2 }}00ms">
                            <div class="work-process__item work-process__item--one">
                                <div class="work-process__image">
                                    <div class="work-process__image__inner">
                                        <img src="{{ asset(imagePath($process->icon)) }}" alt="Color Board">
                                    </div><!-- /.work-process__image__inner -->
                                </div>
                                <div class="work-process__content">
                                    <h4 class="work-process__title">{{ $process->title ?? '' }}</h4>
                                    <span class="work-process__step mt-2">step {{ $index < 9 ? '0'.($index+1): ($index+1) }}</span>
                                    <p class="service-card__text mt-2">
                                        {{ $process->description ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <img data-src="{{ asset('assets/frontend/images/shapes/work-process-shape-1-3.png') }}" alt="" class="work-process__shape-three lazy">
            </div>
            <div class="work-process__shapes">
                <img data-src="{{asset('assets/frontend/images/shapes/work-process-shape-1-1.png')}}" alt="" class="work-process__shape-one lazy">
                <img data-src="{{asset('assets/frontend/images/shapes/work-process-shape-1-2.png')}}" alt="" class="work-process__shape-two lazy">
            </div>
        </section>
    @endif

    @if(count($data['director']) > 0)
        <section class="testimonials-three section-space pt-0">
            <div class="container">
                <div class="testimonials-three__wrapper">
                    <div class="sec-title sec-title--center">
                        <h6 class="sec-title__tagline">Esteemed & Important</h6>
                        <h3 class="sec-title__title">Message From Our <br> Directors</h3>
                    </div>
                    <div class="testimonials-three__carousel floens-owl__carousel floens-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                        "items": 1,
                        "margin": 0,
                        "loop": false,
                        "smartSpeed": 5000,
                        "nav": true,
                        "navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
                        "dots": false,
                        "autoplay": 600,
                        "responsive": {
                            "0": {
                                "items": 1,
                                "margin": 10
                            },
                            "576": {
                                "items": 1,
                                "margin": 10
                            },
                            "768": {
                                "items": 1,
                                "margin": 10
                            },
                            "992": {
                                "items": 1,
                                "margin": 10
                            },
                            "1200": {
                                "items": 1,
                                "margin": 10
                            }
                        }
                    }'>
                        @foreach($data['director'] as $index=>$director)
                            <div class="item">
                                <div class="testimonials-card-three">
                                    <div class="testimonials-card-three__left">
                                        <div class="testimonials-card-three__image">
                                            <img src="{{ asset(imagePath($director->image)) }}" alt="{{ $director->title ?? '' }}" style="width: auto;">
                                        </div>
                                    </div>
                                    <div class="testimonials-card-three__right">
                                        <p class="testimonials-card-three__text text-align-justify">
                                            {{ $director->description ?? '' }}
                                        </p>
                                        <div class="testimonials-card-three__info">
                                            <h4 class="testimonials-card-three__name">{{ $director->title ?? '' }}</h4>
                                            <span class="testimonials-card-three__designation">{{ $director->designation ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($data['homepage']->why_title)
        <section class="about-one section-space" id="about" style="background-color: var(--floens-black2, #2B1E16);">
            <div class="services-one__bg" style="background-image: url({{ asset('assets/frontend/images/backgrounds/services-bg-1.png') }});"></div>
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="about-one__image-grid">
                            <div class="about-one__image">
                                <img data-src="{{ asset(imagePath($data['homepage']->why_image)) }}" alt="" class="about-one__image__three lazy">
                            </div>

                            @if($data['homepage']->why_video)
                                <div class="about-one__circle-text">
                                    <div class="about-one__circle-text__bg" style="background-image: url({{ asset('assets/frontend/images/resources/about-award-bg.jpg') }});"></div>
                                    <div class="video-one__wrapper" style="padding-top: 0px; padding-bottom: 0px; background-image: url({{ asset('assets/frontend/images/shapes/reliable-shape-1-1.png') }});">
                                        <a href="{{$data['homepage']->why_video }}" class="video-button video-button--large video-popup" style="width: 90px;height: 90px;background-color: #f9fafc;">
                                            <span class="icon-play"></span>
                                            <i class="video-button__ripple"></i>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-one__content">
                            <div class="sec-title sec-title--border">
                                <h6 class="sec-title__tagline">  {{ $data['homepage']->why_subtitle ?? 'Why Us' }}</h6>
                                <h3 class="sec-title__title" style="color: var(--floens-white, #ffffff);">{{ $data['homepage']->why_title }}</h3>
                            </div>
                            <div class="about-one__content__text wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <p class="about-one__text text-align-justify" style="color: #d4ccc2">
                                    {{ $data['homepage']->why_description ?? '' }}
                                </p>
                            </div>
                            @if ( $data['homepage']->why_link )
                                <div class="about-one__button wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <a href="{{ $data['homepage']->why_link ?? '#' }}" class="floens-btn">
                                        <span> {{ $data['homepage']->why_button ?? 'Learn More'}}</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            @endif
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div>
            <div class="about-one__shapes">
                <img data-src="{{ asset('assets/frontend/images/shapes/about-shape-1-1.jpg') }}" alt="" class="about-one__shape about-one__shape--one lazy">
                <img data-src="{{ asset('assets/frontend/images/shapes/about-shape-1-1.jpg') }}" alt="" class="about-one__shape about-one__shape--two lazy">
            </div><!-- /.about-one__shapes -->
        </section>
    @endif

    <section class="contact-one section-space">
        <div class="contact-one__bg" style="background-image: url({{ asset('assets/frontend/images/backgrounds/contact-bg-1.png') }});"></div>
        <div class="container">
            <div class="row gutter-y-40">
                <div class="col-lg-6">
                    <div class="contact-one__content">
                        <div class="sec-title sec-title--border">
                            <h6 class="sec-title__tagline">contact</h6>
                            <h3 class="sec-title__title">Free consultation for<br> recruitment process
                            </h3>
                        </div>
                        <p class="contact-one__text text-align-justify">
                            Our deep understanding of the enterprise psyche, coupled with multi-dimensional analytical technique enables us to assess
                            issues and suggest solution approaches in alignment with a global vision.
                            We look forward in achieving more success and fulfilling our mission towards our valued clients across the Globe, keeping in mind the high standards of quality service through professionalism, ethics and accuracy.
                        </p>
                        <div class="contact-one__info wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="contact-one__info__bg" style="background-image: url({{ asset('assets/frontend/images/shapes/contact-info-bg.png') }});"></div>
                            <div class="contact-one__info__content">
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__item__inner">
                                        <div class="contact-one__info__icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <p class="contact-one__info__text">
                                            <a href="tel:{{ $data['setting']->mobile ?? $data['setting']->phone ?? '' }}">
                                                {{ $data['setting']->mobile ?? $data['setting']->phone ?? '' }}
                                            </a></p>
                                    </div>
                                </div>
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__item__inner">
                                        <div class="contact-one__info__icon">
                                            <span class="icon-paper-plane"></span>
                                        </div>
                                        <p class="contact-one__info__text">
                                            <a href="mailto:{{ $data['setting']->email ?? '' }}">
                                                {{ $data['setting']->email ?? '' }}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__item__inner">
                                        <div class="contact-one__info__icon">
                                            <span class="icon-location"></span>
                                        </div>
                                        <address class="contact-one__info__text">
                                            <a href="mailto:{{ $data['setting']->email ?? '' }}">
                                                {{ $data['setting']->address ?? '' }}
                                            </a>
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <img data-src="{{ asset('assets/frontend/images/shapes/contact-shape-1-1.png') }}" alt="" class="contact-one__info__image lazy">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    {!! Form::open(['route' => $module.'contact-us.store', 'method'=>'POST', 'class'=>'contact-one__form contact-form-validated form-one wow fadeInUp submit_form','novalidate'=>'novalidate']) !!}
                        <div class="contact-one__form__bg" style="background-image: url({{ asset('assets/frontend/images/shapes/contact-info-form-bg.png') }});"></div>
                        <div class="contact-one__form__top">
                            <h2 class="contact-one__form__title">Get In Touch With Us And Get <br>
                                Consultation Support</h2>
                        </div>
                        <div class="form-one__group form-one__group--grid">
                            <div class="form-one__control form-one__control--input form-one__control--full">
                                <input type="text" name="name" id="name" placeholder="Your name" required>
                            </div>
                            <div class="form-one__control form-one__control--full">
                                <input type="email" name="email" id="email" placeholder="your email">
                            </div>
                            <div class="form-one__control form-one__control--input form-one__control--full">
                                <input type="text" name="company_name" id="company_name" placeholder="Company name" required>
                            </div>
                            <div class="form-one__control form-one__control--input form-one__control--full">
                                <input type="text" name="designation" id="designation" placeholder="Designation" required>
                            </div>
                            <div class="form-one__control form-one__control--input form-one__control--full">
                                <input type="text" name="phone" id="phone" placeholder="Contact Number" required>
                            </div>
{{--                            <div class="form-one__control form-one__control--full">--}}
{{--                                <select class="selectpicker" aria-label="Choose service">--}}
{{--                                    <option selected>Choose service</option>--}}
{{--                                    <option value="1">Tiling & concrete</option>--}}
{{--                                    <option value="2">Industrial Flooring</option>--}}
{{--                                    <option value="3">Vinyl Plank</option>--}}
{{--                                    <option value="4">Carpets & rugs</option>--}}
{{--                                    <option value="5">Oak Flooring</option>--}}
{{--                                    <option value="6">Vein Patterns</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                            <div class="form-one__control form-one__control--mesgae form-one__control--full">
                                <textarea name="message" placeholder="Write message"></textarea>
                            </div>
                            <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="floens-btn" id="submit-quick-inquiry">
                                        <span>send message</span>
                                        <i class="icon-right-arrow"></i>
                                    </button>
                                </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <img data-src="{{ asset('assets/frontend/images/contact/contact-1-1.jpg') }}" alt="" class="contact-one__image-one wow lazy fadeInLeft" data-wow-duration="1500ms" data-wow-delay="00ms">
        <img data-src="{{ asset('assets/frontend/images/contact/contact-1-2.jpg') }}" alt="" class="contact-one__image-two wow lazy fadeInRight" data-wow-duration="1500ms" data-wow-delay="00ms">
    </section>

    @if(count($data['testimonials'])>0)
        <section class="testimonials-two section-space-two" id="testimonials">
            <div class="container">
                <div class="sec-title sec-title--center">
                    <h6 class="sec-title__tagline">testimonial</h6>
                    <h3 class="sec-title__title">What People are Talking <br> About Us</h3>
                </div>

                <div class="testimonials-two__carousel floens-owl__carousel floens-owl__carousel--with-shadow floens-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                    "items": 1,
                    "margin": 0,
                    "loop": true,
                    "smartSpeed": 700,
                    "nav": false,
                    "navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
                    "dots": false,
                    "autoplay": 600,
                    "responsive": {
                        "0": {
                            "items": 1,
                            "nav": true,
                            "dots": false,
                            "margin": 10
                        },
                        "576": {
                            "items": 1,
                            "dots": true,
                            "nav": false,
                            "margin": 10
                        },
                        "768": {
                            "items": 1,
                            "dots": true,
                            "nav": false,
                            "margin": 10
                        },
                        "992": {
                            "items": 2,
                            "loop": false,
                            "nav": false,
                            "dots": false,
                            "margin": 30
                        }
                    }
                }'>
                    @foreach($data['testimonials'] as $index=>$testimonial)
                        <div class="item d-flex align-items-stretch h-100">
                            <div class="testimonials-card @@extraClassName h-100">
                                <div class="testimonials-card__bg" style="background-image: url({{ asset('assets/frontend/images/testimonials/testimonials-card-bg.png') }});"></div>
                                <div class="testimonials-card__content pt-5">
                                    <div class="testimonials-card__content__inner">
                                        <p class="testimonials-card__text text-align-justify">
                                            "{{ $testimonial->description }}"
                                        </p>
                                    </div>
                                    <div class="testimonials-card__person">
                                        <div class="testimonials-card__person__inner">
                                            <img src="{{ asset(imagePath($testimonial->image))}}" alt="" class="testimonials-card__person__image">
                                            <div class="testimonials-card__person__info">
                                                <h3 class="testimonials-card__person__name">{{ $testimonial->title ?? '' }}</h3>
                                                <span class="testimonials-card__person__designation">{{ $testimonial->position ?? '' }}</span>
                                            </div>
                                        </div><!-- /.testimonials-card__person__inner -->
                                    </div><!-- /.testimonials-card__person -->
                                </div><!-- /.testimonials-card__content -->
                                <div class="testimonials-card__quotes" style='background-image: url({{asset('assets/frontend/images/testimonials/testimonials-quote-bg-1-1.jpg')}});'>
                                    <svg class="testimonials-card__quotes__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 38" fill="none">
                                        <path d="M0 23.7248H10.3849L3.46157 37.5713H13.8465L20.7698 23.7248V2.95508H0V23.7248Z" />
                                        <path d="M27.6929 2.95508V23.7248H38.0778L31.1544 37.5713H41.5393L48.4626 23.7248V2.95508H27.6929Z" />
                                        <path d="M13.34 20.2698H3.45508V0.5H23.2248V20.6517L16.4925 34.1162H7.22567L13.7872 20.9934L14.149 20.2698H13.34Z" />
                                        <path d="M41.0328 20.2698H31.1479V0.5H50.9177V20.6517L44.1854 34.1162H34.9185L41.48 20.9934L41.8419 20.2698H41.0328Z" />
                                    </svg>
                                </div><!-- /.testimonials-card__quotes -->
                            </div><!-- /.testimonials-card -->
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if($data['statistics']->ss_title)
        <section class="reliable-one reliable-one--home section-space-bottom" style="background-color: var(--floens-black2, #2B1E16);background-image: url({{ asset('assets/frontend/images/shapes/contact-info-bg.png') }});">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6">
                        <div class="reliable-one__content">
                            <div class="sec-title sec-title--border">
                                <h6 class="sec-title__tagline">{{ $data['statistics']->ss_subtitle ?? 'statistics' }}</h6>
                                <h3 class="sec-title__title" style="color:#f1944b">{{ $data['statistics']->ss_title ?? '' }}</h3>
                            </div>
                            <p class="reliable-one__text text-align-justify" style="color: #ada7a0;">
                                {{ $data['statistics']->ss_description ?? '' }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms">
                        <div class="row align-items-center gutter-y-30">
                            <div class="col-xl-6 col-lg-12 col-md-5 col-sm-6">
                                <div class="reliable-one__info reliable-one__info--one">
                                    <div class="reliable-one__info__icon">
                                        <span class="icon-024-winner"></span>
                                    </div><!-- /.reliable-one__info__icon -->
                                    <div class="reliable-one__info__text">
                                        <h4 class="reliable-one__info__title" style="color: #ada7a0;">Project Completed</h4>
                                        <!-- /.reliable-one__info__title -->
                                        <h5 class="reliable-one__info__total" style="color:#f1944b">{{ $data['homepage']->project_completed ?? '600'}}</h5>
                                        <!-- /.reliable-one__info__total -->
                                    </div><!-- /.reliable-one__info__text -->
                                </div><!-- /.reliable-one__info -->
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-5 col-sm-6">
                                <div class="reliable-one__info reliable-one__info--two">
                                    <div class="reliable-one__info__icon">
                                        <span class="icon-smiley"></span>
                                    </div><!-- /.reliable-one__info__icon -->
                                    <div class="reliable-one__info__text">
                                        <h4 class="reliable-one__info__title" style="color: #ada7a0;">Happy Clients</h4>
                                        <!-- /.reliable-one__info__title -->
                                        <h5 class="reliable-one__info__total" style="color:#f1944b">{{ $data['homepage']->happy_clients ?? '420'}}</h5>
                                        <!-- /.reliable-one__info__total -->
                                    </div><!-- /.reliable-one__info__text -->
                                </div><!-- /.reliable-one__info -->
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-5 col-sm-6 pt-3">
                                <div class="reliable-one__info reliable-one__info--two reliable_custom">
                                    <div class="reliable-one__info__icon">
                                        <span class="icon-010-travel"></span>
                                    </div><!-- /.reliable-one__info__icon -->
                                    <div class="reliable-one__info__text">
                                        <h4 class="reliable-one__info__title" style="color: #ada7a0;">Visa Approved</h4>
                                        <!-- /.reliable-one__info__title -->
                                        <h5 class="reliable-one__info__total" style="color:#f1944b">{{ $data['homepage']->visa_approved ?? '310'}}</h5>
                                        <!-- /.reliable-one__info__total -->
                                    </div><!-- /.reliable-one__info__text -->
                                </div><!-- /.reliable-one__info -->
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-5 col-sm-6 pt-3">
                                <div class="reliable-one__info reliable-one__info--two">
                                    <div class="reliable-one__info__icon">
                                        <span class="icon-048-success"></span>
                                    </div><!-- /.reliable-one__info__icon -->
                                    <div class="reliable-one__info__text">
                                        <h4 class="reliable-one__info__title" style="color: #ada7a0;">Success Stories</h4>
                                        <!-- /.reliable-one__info__title -->
                                        <h5 class="reliable-one__info__total" style="color:#f1944b">{{ $data['homepage']->success_stories ?? '310'}}</h5>
                                        <!-- /.reliable-one__info__total -->
                                    </div><!-- /.reliable-one__info__text -->
                                </div><!-- /.reliable-one__info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($data['homepage']->grievance_title)
        <section class="faq-one section-space">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="faq-one__image">
                            <div class="faq-one__image__inner">
                                <iframe src="{{$data['setting']->google_map}}" style="border:0;width: 545px;height: 745px; border-radius: 8px" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="faq-one__content">
                            <div class="sec-title sec-title--border">
                                <h6 class="sec-title__tagline"> {{ $data['homepage']->grievance_subtitle ?? '' }}</h6>
                                <h3 class="sec-title__title">{{ $data['homepage']->grievance_title }}</h3>
                            </div>
                            <p class="faq-one__text text-align-justify">
                                {{ $data['homepage']->grievance_description ?? '' }}
                            </p>
                            @if($data['homepage']->grievance_link)
                                <a href="{{ $data['homepage']->grievance_link }}" class="projects-one__btn floens-btn floens-btn--border">
                                    <span>{{ $data['homepage']->grievance_button ?? 'Contact Us' }}</span>
                                    <i class="icon-right-arrow"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($data['blogs'])>0)
        <section class="blog-one section-space-two">
            <div class="blog-one__bg" style="background-image: url({{ asset('assets/frontend/images/backgrounds/blog-bg-1.jpg') }});"></div>
            <!-- /.blog-one__bg -->
            <div class="container">
                <div class="blog-one__top">
                    <div class="row gutter-y-50 align-items-center">
                        <div class="col-lg-8">
                            <div class="sec-title @@extraClassName">
                                <h6 class="sec-title__tagline">news room</h6>
                                <h3 class="sec-title__title">See Latest News <br> from the Blog Posts</h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-one__top__button">
                                <a href="{{ route($module.'blog.index') }}" class="floens-btn floens-btn--border">
                                    <span>view all</span>
                                    <i class="icon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    @foreach($data['blogs'] as $blog)
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="blog-card__image">
                                    <img data-src="{{ asset(imagePath($blog->image))}}" alt="" class="lazy">
                                    <a href="{{ route('frontend.blog.show', $blog->slug) }}" class="blog-card__image__link">
                                        <span class="sr-only">{{ $blog->title ?? '' }}</span>
                                        <!-- /.sr-only --></a>
                                </div>
                                <div class="blog-card__date">
                                    <span class="blog-card__date__day">{{date('d M', strtotime($blog->created_at))}}</span>
                                    <span class="blog-card__date__month">{{date('Y', strtotime($blog->created_at))}}</span>
                                </div><!-- /.blog-card__date -->
                                <div class="blog-card__content">
                                    <h3 class="blog-card__title"><a href="{{ route('frontend.blog.show', $blog->slug) }}">
                                            {{ $blog->title ?? '' }}
                                        </a></h3>
                                    <p class="blog-card__text">{{ elipsis(strip_tags($blog->description ?? '')) }}</p>
                                </div>
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="{{ route($base_route.'blog.category',$blog->blogCategory->slug) }}"><i class="icon-clipboard"></i> {{ $blog->blogCategory->title ?? '' }}</a></li>
    {{--                                <li><a href="#"><i class="icon-comment"></i> 2 Comments</a></li>--}}
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection

@section('js')
    <script src="{{asset('assets/common/general.js')}}"></script>
    <script src="{{asset('assets/backend/js/jquery-ui.min.js')}}"></script>

    @include($module.'includes.toast_alert')
    <script>
        $(document).ready(function () {
            let popup2 = "{{$data['setting']->popup_image}}";

            // Open Popup on Page Load
            if (popup2 !== "" && popup2 !== null) {
                $("#customPopup").fadeIn();
            }

            // Close Popup
            $("#closePopup").click(function () {
                $("#customPopup").fadeOut();
            });

            // Close Popup on outside click
            $(document).mouseup(function (e) {
                var popup = $(".popup");
                if (!popup.is(e.target) && popup.has(e.target).length === 0) {
                    $("#customPopup").fadeOut();
                }
            });
        });
    </script>

@endsection

