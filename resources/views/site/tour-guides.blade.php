@extends('site.layout.main')

@section('website-page-title', 'Tour Guides')

@section('website-custom-style')
    <style>
        .truncate-text {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>
@endsection

@section('website-main-section')

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Tour Guide</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Tour Guide Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tour Guide</h6>
                <h1 class="mb-5">Find Your Tour Guide</h1>
            </div>
            <div class="row g-4 justify-content-center">
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
                                        <a href="{{ url('tour-guide/view/'.$tourGuide->id) }}" class="btn btn-sm btn-primary px-3 border-end"
                                            style="border-radius: 30px 0 0 30px;">Read More</a>
                                        @auth('tourist')
                                            <a href="javascript:void(0)" data-id="{{ $tourGuide->id }}"
                                                class="btn btn-sm btn-primary px-3 connect"
                                                style="border-radius: 0 30px 30px 0;">Book Now</a>
                                        @else
                                            <a href="{{ url('/findCompanion') }}" class="btn btn-sm btn-primary px-3"
                                                style="border-radius: 0 30px 30px 0;">Book Now</a>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Tour Guide End -->

@endsection
@section('website-custom-script')
    <script>
        $('.connect').on('click', function() {
            const id = $(this).data('id');
            if (confirm('Sure you want to connect?')) {
                Notiflix.Loading.standard('Please wait...');
                $.ajax({
                    type: "post",
                    url: "{{ route('tourist.tourist.connect') }}",
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        Notiflix.Loading.remove();
                        if (response.success) {
                            Notiflix.Notify.success(response.message);
                            window.location.href = "{{ route('tourist.tourist.index') }}"
                        }
                        console.log(response);
                    }
                });
            }
        });
    </script>
@endsection
