@extends('site.layout.main')

@section('website-page-title', $tourPackage->title)

@section('website-custom-style')
    <style>
        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 2px solid #86B817;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .info-card {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
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
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="info-card">
                        <div class="text-center">
                            <img class="profile-img" src="{{ asset($tourPackage->cover_image) }}" alt="{{ $tourPackage->title }}">
                            <h3 class="mb-3">{{ $tourPackage->title }}</h3>
                            <div class="mb-4">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                        </div>
                        <p class="text-secondary">{{ $tourPackage->description }}</p>
                        <hr>
                        <div class="mb-4">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <span>{{ $tourPackage->days . ' Days' }}</span>
                        </div>
                        <div class="mb-4">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            <span>{{ $tourPackage->nights . ' Nights' }}</span>
                        </div>
                        <div class="mb-4">
                            <i class="fa fa-rupee-sign text-primary me-2"></i>
                            <span>{{ $tourPackage->price ? $tourPackage->price : 'Free' }}</span>
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ url('tour-operators/') }}" class="btn btn-primary px-3 me-2 rounded-1"><i class="fa fa-arrow-left"></i> Back to Packages</a>
                            @auth('tourist')
                                <a href="javascript:void(0)" data-id="{{ $tourPackage->id }}" class="btn btn-primary px-3 rounded-1 enquireNow">Enquire Now</a>
                            @else
                                <a href="{{ route('findCompanion') }}" class="btn btn-primary px-3 rounded-1">Enquire Now</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="info-card">
                        <h4 class="mb-3">About {{ $tourPackage->title }}</h4>
                        <p>{{ $tourPackage->detailed_description ?? 'No additional information available.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Package Detail End -->

@endsection

@section('website-custom-script')

@endsection
