@extends('site.layout.main')

@section('website-page-title', 'Services')
@section('website-custom-style')

@endsection
@section('website-main-section')


<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown">Services</h1>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- Service Start -->
<div class="container-xxl py-5">
<div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
        <h1 class="mb-5">Our Services</h1>
    </div>
    <div class="row g-4">
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                    <h5>WorldWide Tours</h5>
                    <p>Explore the world with Company Around’s custom tours, offering unforgettable experiences in diverse destinations worldwide.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                    <h5>Hotel Reservation</h5>
                    <p>Book your stay effortlessly with our hotel reservation service, offering a range of accommodations to fit every need and budget.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-user text-primary mb-4"></i>
                    <h5>Travel Guides</h5>
                    <p>Enhance your travels with our expert travel guides, providing insightful and memorable tours to make your journey special.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item rounded pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                    <h5>Event Management</h5>
                    <p>From corporate to special events, Company Around ensures every detail is handled with care for a flawless experience.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Service End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container">
    <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
        <h1 class="mb-5">Our Clients Say!!!</h1>
    </div>
    <div class="owl-carousel testimonial-carousel position-relative">
        <div class="testimonial-item bg-white text-center border p-4">
            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{asset('site/img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
            <h5 class="mb-0">User 1</h5>
            <p>City-1, Country-1</p>
            <p class="mb-0">This is a dummy text to show how the testminial of the user will be showed.</p>
        </div>
        <div class="testimonial-item bg-white text-center border p-4">
            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{asset('site/img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
            <h5 class="mb-0">User 1</h5>
            <p>City-1, Country-1</p>
            <p class="mt-2 mb-0">This is a dummy text to show how the testminial of the user will be showed.</p>
        </div>
        <div class="testimonial-item bg-white text-center border p-4">
            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{asset('site/img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
            <h5 class="mb-0">User 1</h5>
            <p>City-1, Country-1</p>
            <p class="mt-2 mb-0">This is a dummy text to show how the testminial of the user will be showed.</p>
        </div>
        <div class="testimonial-item bg-white text-center border p-4">
            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{asset('site/img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
            <h5 class="mb-0">User 1</h5>
            <p>City-1, Country-1</p>
            <p class="mt-2 mb-0">This is a dummy text to show how the testminial of the user will be showed.</p>
        </div>
    </div>
</div>
</div>
<!-- Testimonial End -->
@endsection
@section('website-custom-script')

@endsection
