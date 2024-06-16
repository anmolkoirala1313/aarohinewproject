<section class="testimonials-two section-space-two" id="testimonials">
    @php [$remaining, $last] = splitWordsFromEnd($element->first()->title, 4);
    @endphp
    <div class="container">
        <div class="sec-title sec-title--center" style="max-width: 993px; margin: 0 auto 30px;">
            @if ($element->first()->subtitle )
                <h6 class="sec-title__tagline">{{ $element->first()->subtitle ?? '' }}</h6>
            @endif
            <h3 class="sec-title__title">{{ $remaining ?? '' }} <br/> {{ $last ?? '' }} </h3>
            <div class="reliable-one__text mt-3">{{ $element->first()->description ?? '' }}</div>
        </div>
        <div class="row gutter-y-60">
            <div class="col-lg-12">
                @if(count($element))
                    <div class="pb-5">
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
                            @foreach($element as $index=>$row)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $row->list_title ?? '' }}</td>
                                    <td>{{ $row->list_description ?? '' }}</td>
                                    <td>
                                        <a href="{{ asset(filePath($row->image))}}" class="fw-medium link-primary" download>Download File</a>
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
</section>
