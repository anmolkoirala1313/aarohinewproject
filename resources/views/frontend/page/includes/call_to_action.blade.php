<section class="evaluation-schedule floens-jarallax" data-jarallax data-speed="0.3"
         style="background-image: url({{ asset('assets/frontend/images/backgrounds/evaluation-schedule-bg-1.jpg') }});">
    <div class="container-fluid">
        <div class="evaluation-schedule__content">
            <h5 class="evaluation-schedule__tagline">{{ $element->first()->subtitle ?? '' }}</h5>
            <h2 class="evaluation-schedule__title">{{ $element->first()->title ?? '' }}</h2>
            @if($element->first()->button_link)
                <a href="{{ $element->first()->button_link }}" class="evaluation-schedule__btn floens-btn">
                    <span>{{ $element->first()->button ?? 'Learn More' }}</span>
                    <i class="icon-right-arrow"></i>
                </a>
            @endif
        </div>
    </div>
</section>

