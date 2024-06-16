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

    <section class="work-details section-space">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="work-details__content">
                        <div class="work-details__image wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <img class="lazy" data-src="{{ asset(imagePath($data['row']->image)) }}" alt="">
                        </div>
                        <h3 class="work-details__title">   {{ $data['row']->name ?? $data['row']->title ?? '' }}</h3>
                        <div class="work-details__text work-details__text--one custom-description text-align-justify wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            {!!  $data['row']->description !!}
                        </div>
                        <div class="blog-details__social">
                            <h4 class="blog-details__meta__title">Share:</h4>
                            <div class="details-social">
                                <a href="#" target="_blank"> <i class="icon-facebook" onclick='fbShare("{{route('frontend.job.show',$data['row']->slug)}}")'></i></a>
                                <a href="#" target="_blank"> <i class="fab fa-whatsapp" onclick='whatsappShare("{{route('frontend.job.show',$data['row']->slug)}}","{{ $data['row']->title }}")'></i></a>
                                <a href="#" target="_blank"> <i class="fs-14"  onclick='twitShare("{{route('frontend.job.show',$data['row']->slug)}}","{{ $data['row']->title }}")'>
                                        <?xml version="1.0" ?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" width="20px" height="20px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><path d="M14.095479,10.316482L22.286354,1h-1.940718l-7.115352,8.087682L7.551414,1H1l8.589488,12.231093L1,23h1.940717  l7.509372-8.542861L16.448587,23H23L14.095479,10.316482z M11.436522,13.338465l-0.871624-1.218704l-6.924311-9.68815h2.981339  l5.58978,7.82155l0.867949,1.218704l7.26506,10.166271h-2.981339L11.436522,13.338465z"/></svg>
                                    </i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <aside class="work-details__sidebar">
                        <h3 class="work-details__sidebar__title">Demand Information</h3>
                        <div class="work-details__sidebar__inner">
                            <div class="work-details__sidebar__info">
                                <h4 class="work-details__sidebar__info__title">Published Date:</h4>
                                <p class="work-details__sidebar__info__text">
                                    @if(@$data['row']->end_date >= date('Y-m-d'))
                                        {{date('M j, Y',strtotime(@$data['row']->start_date))}} - {{date('M j, Y',strtotime(@$data['row']->end_date))}}
                                    @else
                                        Expired
                                    @endif
                                </p>
                            </div>
                            @if($data['row']->company)
                                <div class="work-details__sidebar__info work-details__sidebar__info--client">
                                    <h4 class="work-details__sidebar__info__title work-details__sidebar__info__title--client">Company:</h4>
                                    <p class="work-details__sidebar__info__text">{{ $data['row']->company ?? '' }}</p>
                                </div>
                            @endif
                            @if($data['row']->required_number)
                                <div class="work-details__sidebar__info">
                                    <h4 class="work-details__sidebar__info__title">Required Number:</h4>
                                    <p class="work-details__sidebar__info__text">{{ $data['row']->required_number ?? '' }}</p>
                                </div>
                            @endif
                            @if($data['row']->salary)
                                <div class="work-details__sidebar__info">
                                    <h4 class="work-details__sidebar__info__title">Salary:</h4>
                                    <p class="work-details__sidebar__info__text">{{ $data['row']->required_number ?? '' }}</p>
                                </div>
                            @endif
                            @if($data['row']->min_qualification)
                                <div class="work-details__sidebar__info">
                                    <h4 class="work-details__sidebar__info__title">Min. Qualification:</h4>
                                    <p class="work-details__sidebar__info__text">{{ $data['row']->min_qualification ?? '' }}</p>
                                </div>
                            @endif
                            @if($data['row']->formlink && $data['row']->end_date >= date('Y-m-d'))

                                <div class="work-details__sidebar__info">
                                    <h4 class="work-details__sidebar__info__title">Application Form:</h4>
                                    <p class="work-details__sidebar__info__text"><a href="{{$data['row']->formlink}}" target="_blank">Submit response</a></p>
                                </div>
                            @endif
                        </div>
                    </aside>
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
