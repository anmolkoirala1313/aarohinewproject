@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'background_action.jpeg'])

    <section class="product-page product-page--left section-space-bottom">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-xl-3 col-lg-4">
                    @include($view_path.'includes.sidebar')
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="row gutter-y-30">
                        @foreach( $data['rows']  as $index=>$row)
                            <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
                                <div class="service-card-two">
                                    <div class="service-card-two__bg" style="background-image: url({{asset('assets/frontend/images/services/service-bg-2-1.png')}});"></div>
                                    <div class="service-card-two__image">
                                        <img src="{{ asset(imagePath($row->image)) }}" alt="" style="width: 390px; height: 305px; object-fit: cover">
                                    </div><!-- /.service-card-two__image -->
                                    <div class="service-card-two__content">
                                        <h3 class="service-card-two__title">
                                            <a href='{{ route('frontend.job.show', $row->slug) }}'>
                                                {{ $row->title ?? '' }}
                                            </a>
                                        </h3><!-- /.service-card-two__title -->
                                        <div class="service-card-two__bottom">
                                            <a href='{{ route('frontend.job.show', $row->slug) }}' class="service-card-two__link floens-btn">
                                                <span>demand details</span>
                                                <i class="icon-right-arrow"></i>
                                            </a>
                                            <span class="service-card-two__icon icon-newspaper1"></span>
                                        </div><!-- /.service-card-two__bottom -->
                                    </div><!-- /.service-card-two__content -->
                                </div><!-- /.service-card-two -->
                            </div>
                        @endforeach
                        <div class="col-12">
                            {{ $data['rows']->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
