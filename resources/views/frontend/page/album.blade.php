@extends('frontend.layouts.master')
@section('title') {{ $page }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'background_action2.jpeg'])

    <section class="work-page section-space-bottom">
        <div class="container">
            @if($data['heading'])
                <div class="sec-title sec-title--center">
                    <h6 class="sec-title__tagline">{{  $data['heading']->subtitle ?? ''  }}</h6>
                    <h3 class="sec-title__title sec-title--border" style="padding-bottom: 18px;">{{ $data['heading']->title ?? '' }}</h3>
                    <div class="reliable-one__text mt-3">{!!  $data['heading']->description ?? '' !!}</div>
                </div>
            @endif
            <div class="row gutter-y-30">
                @foreach($data['rows'] as $row)
                    <div class="col-lg-4 col-md-6">
                        <div class="work-card">
                            <div class="work-card__image">
                                <img data-src="{{ asset(imagePath($row->image)) }}" alt="" class="lazy">
                            </div>
                            <div class="work-card__content-show">
                                <div class="work-card__content-inner">
                                    <h3 class="work-card__tagline">Images: {{ $row->album_gallery_count }}</h3>
                                    <h3 class="work-card__title"><a href="{{ route($base_route.'page.album_gallery', $row->slug) }}">{{ $row->title ?? '' }}</a></h3>
                                </div>
                            </div>
                            <div class="work-card__content-hover">
                                <div class="work-card__content-inner">
                                    <h3 class="work-card__tagline">Images: {{ $row->album_gallery_count }}</h3>
                                    <h3 class="work-card__title"><a href="{{ route($base_route.'page.album_gallery', $row->slug) }}">{{ $row->title ?? '' }}</a></h3>
                                </div>
                                <a href="{{ route($base_route.'page.album_gallery', $row->slug) }}" class="work-card__link floens-btn"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection
