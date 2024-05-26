@extends('frontend.layouts.master')
@section('title') {{ $page }} @endsection
@section('css')

    <style>
        .image-dimension{
            width: 450px;
            height: 310px;
            object-fit: cover;
        }
    </style>
@endsection


@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'background-2.png'])

    <section class="gallery-one section-space">
        <div class="container-fluid">
            <div class="row">
                @foreach($data['rows']->albumGallery as $index=>$gallery)
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <div class="gallery-one__card">
                            <img src="{{ asset(galleryImagePath('album').$gallery->resized_name) }}" alt="" class="image-dimension">
                            <div class="gallery-one__card__hover">
                                <a href="{{ asset(galleryImagePath('album').$gallery->resized_name) }}" class="img-popup">
                                    <span class="gallery-one__card__icon"></span>
                                </a>
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
