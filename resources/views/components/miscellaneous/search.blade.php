@if ($tourGuides->isEmpty())
<h4 class="text-secondary text-center wow fadeInUp" data-wow-delay="0.1s"><i
        class="fa fa-exclamation-triangle"></i> No tour guides available at the moment.</h4>
@else
@foreach ($tourGuides as $tourGuide)
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="package-item">
            <div class="overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset($tourGuide->profile) }}" alt="">
            </div>
            <div class="d-flex border-bottom">
                <small class="flex-fill text-center border-end py-2 text-capitalize"><i
                        class="fa fa-map-marker-alt text-primary me-2"></i>{{ $tourGuide->city ?? 'Null' }}</small>
                <small class="flex-fill text-center border-end py-2"><i
                        class="fa fa-comment text-primary me-2"></i>24</small>
                <small class="flex-fill text-center py-2 text-capitalize"><i
                        class="fa fa-user text-primary me-2"></i>{{ $tourGuide->gender ?? 'Null' }}</small>
            </div>
            <div class="text-center p-4">
                <h4 class="mb-0 text-truncate">{{ $tourGuide->name }}</h4>
                <h5 class="mb-0 text-secondary">
                    {{ $tourGuide->charges ? '₹ ' . $tourGuide->charges : 'Free' }}</h5>
                <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star"></small>
                    <small class="fa fa-star"></small>
                </div>
                <p class="text-truncate">{{ $tourGuide->short_description ?? 'Null' }}</p>
                <div class="d-flex justify-content-center mb-2">
                    {{-- <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                        style="border-radius: 30px 0 0 30px;">Read More</a> --}}
                    @auth('tourist')
                        <a href="javascript:void(0)" data-id="{{ $tourGuide->id }}"
                            class="btn btn-sm btn-primary rounded-1 px-3 connect">Book Now</a>
                    @else
                        <a href="{{ url('/findCompanion') }}"
                            class="btn btn-sm btn-primary rounded-1 px-3">Book Now</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endforeach
@endif
