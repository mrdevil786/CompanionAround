@extends('site.layout.main')

@section('website-page-title', 'Tour Guide Details')

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
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="info-card">
                        <div class="text-center">
                            <img class="profile-img" src="{{ asset($tourGuide->profile) }}" alt="{{ $tourGuide->name }}">
                            <h3 class="mb-3">{{ $tourGuide->name }}</h3>
                            <div class="mb-4">
                                @for ($i = 1; $i <= 5; $i++)
                                    <small class="fa fa-star{{ $i <= 4 ? ' text-primary' : '' }}"></small>
                                @endfor
                            </div>
                        </div>
                        <p class="text-secondary">{{ $tourGuide->short_description }}</p>
                        <hr>
                        <div class="mb-4">
                            <i class="fa fa-map-marker-alt text-primary me-2"></i>
                            <span class="text-capitalize">{{ $tourGuide->city ?? 'Not specified' }}</span>
                        </div>
                        <div class="mb-4">
                            <i class="fa fa-user text-primary me-2"></i>
                            <span class="text-capitalize">{{ $tourGuide->gender ?? 'Not specified' }}</span>
                        </div>
                        <div class="mb-4">
                            <i class="fa fa-rupee-sign text-primary me-2"></i>
                            <span>{{ $tourGuide->charges ? $tourGuide->charges : 'Free' }}</span>
                        </div>
                        <div class="mb-4">
                            <i class="fa fa-language text-primary me-2"></i>
                            @forelse ($tourGuide->tourguidelanguage as $language)
                                <span class="badge rounded-1 bg-secondary">{{ $language->language->name }}</span>
                            @empty
                                <span>No languages listed.</span>
                            @endforelse
                        </div>
                        <div class="activity">
                            <h4>Activities:</h4>
                            <ul>
                                @forelse ($tourGuide->activity as $activity)
                                    <li>{{ Str::ucfirst(str_replace('_', ' ', $activity->activity)) }}</li>
                                @empty
                                    <li>No activities listed.</li>
                                @endforelse
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ url('tour-guides/') }}" class="btn btn-primary px-3 me-2 rounded-1"><i
                                    class="fa fa-arrow-left"></i> Back to Guides</a>
                            @auth('tourist')
                                <a href="javascript:void(0)" data-id="{{ $tourGuide->id }}"
                                    class="btn btn-primary px-3 rounded-1 connect">Book Now</a>
                            @else
                                <a href="{{ url('/findCompanion') }}" class="btn btn-primary px-3 rounded-1">Book Now</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="info-card">
                        <h4 class="mb-3">About {{ $tourGuide->name }}</h4>
                        <p>{{ $tourGuide->detailed_description ?? 'No additional information available.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Guide Detail End -->

@endsection

@section('website-custom-script')

@endsection
