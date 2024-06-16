<section class="faq-page section-space">
    <div class="container">
        <div class="sec-title sec-title--center">
            <h3 class="sec-title__title" style="padding-bottom: 30px;">{{ $element->first()->title ?? '' }}</h3>
        </div>
        <div class="row gutter-y-60">
            <div class="col-lg-12 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="faq-accordion floens-accordion" data-grp-name="floens-accordion">
                    @foreach($element as $index=>$row)
                        <div class="accordion">
                            <div class="accordion-title">
                                <h4>
                                    {{ $row->list_title ?? '' }}
                                    <span class="accordion-title__icon"></span>
                                </h4>
                            </div>
                            @if($row->list_description)
                                <div class="accordion-content text-align-justify">
                                    <div class="inner">
                                        <p>
                                            {{ $row->list_description ?? '' }}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
