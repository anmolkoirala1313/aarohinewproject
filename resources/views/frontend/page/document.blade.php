@extends('frontend.layouts.master')
@section('title') {{ $page }} @endsection
@section('css')
    <style>
        .thead-theme{
            background: #ec673396;
        }
    </style>
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'background_action.jpeg'])

    <div class="cart-page content-detail-block section-space">
        <div class="container">
            <div class="sec-title sec-title--center">
                @if ( $data['rows']->first()->subtitle )
                    <h6 class="sec-title__tagline">{{  $data['rows']->first()->subtitle  ?? ''  }}</h6>
                @endif
                <h3 class="sec-title__title sec-title--border" style="padding-bottom: 18px;">{{  $data['rows']->first()->title ?? '' }}</h3>
                <div class="reliable-one__text mt-3">{{  $data['rows']->first()->description ?? '' }}</div>
            </div>
            <div class="row row-gap-32">
                <div class="col-12 col-xl-12">
                        @if(count($data['rows']))
                            <div class=" py-5">
                                <table class="table table-hover table-bordered" data-toggle="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">S.N.</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Document</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['rows'] as $row)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $row->list_title ?? '' }}</td>
                                            <td>{{ $row->list_description ?? '' }}</td>
                                            <td>
                                                <a href="{{ asset(filePath($row->list_file))}}" class="fw-medium link-primary" download>Download File</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection
