@extends('site.layout.main')

@section('website-page-title', $tourPackage->title)

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
                    <h1 class="display-3 text-white animated slideInDown">{{ $tourPackage->title }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Tour Package Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid profile-img" src="{{ asset($tourPackage->cover_image) }}" alt="{{ $tourPackage->title }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100 p-4 bg-light">
                        <h3 class="mb-3">{{ $tourPackage->title }}</h3>
                        <p class="text-secondary">{{ $tourPackage->description }}</p>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <span>{{ $tourPackage->days . ' Days' }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <span>{{ $tourPackage->nights . ' Nights' }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-rupee-sign text-primary me-2"></i>
                            <span>{{ $tourPackage->price ? $tourPackage->price : 'Free' }}</span>
                        </div>
                        <div class="mb-4">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ url('tour-operators/') }}" class="btn btn-primary px-3 me-2"><i class="fa fa-arrow-left"></i> Back to Packages</a>
                            @auth('tourist')
                                <a href="javascript:void(0)" data-id="{{ $tourPackage->id }}" class="btn btn-primary px-3 enquireNow">Enquire Now</a>
                            @else
                                <a href="{{ route('findCompanion') }}" class="btn btn-primary px-3">Enquire Now</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Package Detail End -->

@endsection

@section('website-custom-script')

@endsection
