<section class="gallery-one section-space">
    <div class="container-fluid">
        <div class="sec-title sec-title--center">
            @if ($element->list_number_1)
                <h6 class="sec-title__tagline"> {{ $element->list_number_1 ?? '' }}</h6>
            @endif
            <h3 class="sec-title__title sec-title--border" style="padding-bottom: 18px;">{{ $element->list_number_2 ?? '' }}</h3>
        </div>
        <div class="row">
            @foreach($element->pageSectionGalleries as $index=>$gallery)
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="gallery-one__card">
                        <img src="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}" alt="" class="{{ @$data['row']->slug=='legal-document' || @$data['row']->slug=='legal-documents' || @$data['row']->slug=='sample-documents' || @$data['row']->slug=='sample-document' ? 'w-100':'image-dimension' }}">
                        <div class="gallery-one__card__hover">
                            <a href="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}" class="img-popup">
                                <span class="gallery-one__card__icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


