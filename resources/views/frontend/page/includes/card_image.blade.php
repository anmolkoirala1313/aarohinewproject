<div class="service-block style-about-two pt-60 pb-60 style-three">
    <div class="container">
        <div class="sec-title sec-title--center">
            @if ($element->first()->subtitle )
                <h6 class="sec-title__tagline">  {{ $element->first()->subtitle ?? '' }}</h6>
            @endif
            <h3 class="sec-title__title sec-title--border" style="padding-bottom: 18px;">{{ $element->first()->title ?? '' }}</h3>
            <div class="reliable-one__text mt-3">{!!  $element->first()->description ?? '' !!}</div>
        </div>
        <div class="list-service mt-40 pt-12">
            <div class="row">
                @foreach($element as $index=>$row)
                    <div class="card custom-card mt-5">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-{{ $row->image == 'left' ? '5':'7' }}" style="{{ $row->image == 'left' ? 'padding-left:0px':'' }}">
                                @if($row->image == 'left')
                                    @include($view_path.'partials.card_image')
                                @else
                                    @include($view_path.'partials.card_text')
                                @endif
                            </div>
                            <div class="col-12 col-md-{{ $row->image == 'left' ? '7':'5' }}" style="{{ $row->image == 'left' ? '':'padding-right:0px' }}">
                                @if($row->image == 'right')
                                    @include($view_path.'partials.card_image')
                                @else
                                    @include($view_path.'partials.card_text')
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
