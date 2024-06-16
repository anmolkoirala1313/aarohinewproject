@extends('frontend.layouts.master')
@section('title') {{ $data['row']->title ?? $page_title }} @endsection
@section('css')
    <style>
        .table {
            width: 100%!important;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            background-color: #f8f9fa;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .table tbody tr:first-child {
            background-color: var(--blue); /* Different background color */
            border-color:var(--blue); /* Different border color */
            color: white;
        }

    </style>
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'background_action.jpeg'])


    <section class="blog-page section-space">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="blog-card wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="blog-card__image">
                                <img class="lazy" data-src="{{ asset(imagePath($data['row']->image)) }}" alt="">
                                <div class="blog-card__date">
                                    <span class="blog-card__date__day">{{date('d M', strtotime($data['row']->created_at))}}</span>
                                    <span class="blog-card__date__month">{{date('Y', strtotime($data['row']->created_at))}}</span>
                                </div>
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">{{ $data['row']->title ?? '' }}</h3>
                                <div class="blog-card__text blog-card__text--one custom-description text-align-justify">
                                    {!!  $data['row']->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="blog-details__meta">
                            <div class="blog-details__tags">
                                <h4 class="blog-details__meta__title">Tags:</h4>
                                <div class="blog-details__tags__box">
                                    <a href="{{ route('frontend.blog.category', $data['row']->blogCategory->slug)}}">
                                        {{ $data['row']->blogCategory->title ?? ''}}
                                    </a>
                                </div>
                            </div>
                            <div class="blog-details__social">
                                <h4 class="blog-details__meta__title">Share:</h4>
                                <div class="details-social">
                                    <a href="#" target="_blank"> <i class="icon-facebook" onclick='fbShare("{{route('frontend.blog.show',$data['row']->slug)}}")'></i></a>
                                    <a href="#" target="_blank"> <i class="fab fa-whatsapp" onclick='whatsappShare("{{route('frontend.blog.show',$data['row']->slug)}}","{{ $data['row']->title }}")'></i></a>
                                    <a href="#" target="_blank"> <i class="fs-14"  onclick='twitShare("{{route('frontend.blog.show',$data['row']->slug)}}","{{ $data['row']->title }}")'>
                                            <?xml version="1.0" ?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" width="20px" height="20px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><path d="M14.095479,10.316482L22.286354,1h-1.940718l-7.115352,8.087682L7.551414,1H1l8.589488,12.231093L1,23h1.940717  l7.509372-8.542861L16.448587,23H23L14.095479,10.316482z M11.436522,13.338465l-0.871624-1.218704l-6.924311-9.68815h2.981339  l5.58978,7.82155l0.867949,1.218704l7.26506,10.166271h-2.981339L11.436522,13.338465z"/></svg>
                                        </i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include($view_path.'includes.sidebar')

                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script>
        function fbShare(url) {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
        }
        function twitShare(url, title) {
            window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
        }
        function whatsappShare(url, title) {
            message = title + " " + url;
            window.open("https://api.whatsapp.com/send?text=" + message);
        }
        $( document ).ready(function() {
            let selector = $('.custom-description').find('table').length;
            if(selector>0){
                $('.custom-description').find('table').addClass('table table-bordered table-responsive');
            }
        });
    </script>
@endsection
