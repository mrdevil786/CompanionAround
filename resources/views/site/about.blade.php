@extends('site.layout.main')

@section('website-page-title', 'About')
@section('website-custom-style')

@endsection
@section('website-main-section')


    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('site/img/about.jpg') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Companion Around</span></h1>
                    <p class="mb-4">Discover the world with Company Around by your side. From iconic landmarks to hidden
                        gems, our expert guides turn every journey into an unforgettable adventure.</p>
                    <p class="mb-4">Travel with confidence and ease, knowing you’re in trusted hands. Let Company Around
                        make your trips special and your memories timeless.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-1 py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>
                    <h1 class="mb-5">Meet Our Guide</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('site/img/team-1.jpg') }}" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('site/img/team-2.jpg') }}" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('site/img/team-3.jpg') }}" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('site/img/team-4.jpg') }}" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Team End -->

    <!-- Tour Guide Start -->
    <div class="container-xxl py-5" id="tourGuide">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tour Guide</h6>
                <h1 class="mb-5">Find Your Tour Guide</h1>
            </div>
            <div class="row g-4 justify-content-center tourguide-container" id="tourGuideContainer">
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
                                        <a href="{{ url('tour-guide/view/' . $tourGuide->id) }}"
                                            class="btn btn-sm btn-primary px-3 border-end"
                                            style="border-radius: 30px 0 0 30px;">Know More</a>
                                        @auth('tourist')
                                            <a href="javascript:void(0)" data-id="{{ $tourGuide->id }}"
                                                class="btn btn-sm btn-primary px-3 connect"
                                                style="border-radius: 0 30px 30px 0;">Connect</a>
                                        @else
                                            <a href="{{ url('/findCompanion') }}" class="btn btn-sm btn-primary px-3"
                                                style="border-radius: 0 30px 30px 0;">Connect</a>
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

@endsection
