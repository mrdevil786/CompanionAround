@extends('site.layout.main')

@section('website-page-title', 'Tour Guide Details')

@section('website-custom-style')
    <style>
        .profile-img {
            width: 100%;
            max-height: 100%;
            object-fit: cover;
        }
    </style>
@endsection

@section('website-main-section')

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About {{ $tourGuide->name }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Tour Guide Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid profile-img" src="{{ asset($tourGuide->profile) }}" alt="{{ $tourGuide->name }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100 p-4 bg-light">
                        <h3 class="mb-3">{{ $tourGuide->name }}</h3>
                        <p class="text-secondary">{{ $tourGuide->short_description }}</p>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-map-marker-alt text-primary me-2"></i>
                            <span class="text-capitalize">{{ $tourGuide->city ?? 'Null' }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-user text-primary me-2"></i>
                            <span class="text-capitalize">{{ $tourGuide->gender ?? 'Null' }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-rupee-sign text-primary me-2"></i>
                            <span>{{ $tourGuide->charges ? $tourGuide->charges : 'Free' }}</span>
                        </div>
                        <div class="mb-4">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star"></small>
                            <small class="fa fa-star"></small>
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ url('tour-guides/') }}" class="btn btn-primary px-3 me-2"><i class="fa fa-arrow-left"></i> Back to Guides</a>
                            @auth('tourist')
                                <a href="javascript:void(0)" data-id="{{ $tourGuide->id }}" class="btn btn-primary px-3 connect">Book Now</a>
                            @else
                                <a href="{{ url('/findCompanion') }}" class="btn btn-primary px-3">Book Now</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <h4 class="mb-3">About {{ $tourGuide->name }}</h4>
                    <p>{{ $tourGuide->detailed_description ?? 'No additional information available.' }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Guide Detail End -->

@endsection

@section('website-custom-script')

@endsection
