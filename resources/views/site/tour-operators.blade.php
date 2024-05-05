@extends('site.layout.main')

@section('website-page-title', 'Tour Operators')

@section('website-custom-style')
@endsection

@section('website-main-section')

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Tour Operators</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tour Operators</h6>
                <h1 class="mb-5">Find Your Tour Operators</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($tourPackages as $tourPackage)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset($tourPackage->cover_image) }}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt text-primary me-2"></i>Thailand</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                    Person</small>
                            </div>
                            <div class="text-center p-4">
                                <h4 class="mb-0 text-truncate">{{ $tourPackage->title }}</h4>
                                <h5 class="mb-0 text-secondary">
                                    {{ $tourPackage->price ? '₹ ' . $tourPackage->price : 'Free' }}</h5>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="text-truncate">{{ $tourPackage->description ?? 'Null' }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="btn btn-sm btn-primary px-3"
                                        style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection

@section('website-custom-script')
@endsection
