@extends('site.layout.main')

@section('website-page-title', 'Home')
@section('website-custom-style')
    <style>
        .container-fluid.bg-primary {
            height: 100vh;
        }

        .search-popup {
            position: absolute;
            background-color: white;
            border: 1px solid #ced4da;
            width: 100%;
            display: none;
            z-index: 999;
            border-radius: 10px;
        }

        .additional-div-2 {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-left: 0px;
            height: 14vh;
        }

        .checkbox-label {
            margin-right: 10px;
        }

        .checkbox {
            margin-right: 5px;
        }

        .price-range-container {
            display: flex;
            align-items: center;
            margin-top: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ccc;
        }

        .price-range-text {
            margin-right: 30px;
            padding-left: 20px;
        }

        .slider-container {
            position: relative;
            width: calc(100% - 150px);
            height: 10px;
            background-color: #ddd;
            cursor: pointer;
        }

        .slider-track {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #86B817 !important;
            transform: translateY(-50%);
        }

        .slider-thumb {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            background-color: #fff;
            border: 1px solid #86B817 !important;
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .slider-label-start {
            position: absolute;
            top: -20px;
            left: -12px;
            font-size: 14px;
            color: #333;
        }

        .slider-label-end {
            position: absolute;
            top: -20px;
            right: -14px;
            font-size: 14px;
            color: #333;
        }

        .slider-amount {
            position: absolute;
            top: -30px;
            transform: translateX(-50%);
            white-space: nowrap;
        }

        .slider {
            width: calc(100% - 150px);
        }

        .slider::-webkit-slider-runnable-track {
            width: 100%;
            height: 4px;
            background-color: #ccc;
            border-radius: 2px;
        }
    </style>
@endsection
@section('website-main-section')

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet diam et
                        eos erat ipsum lorem sit</p>
                    <form id="searchForm">
                        @csrf
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input id="searchInput" class="form-control border-0 rounded-1 w-100 py-3 ps-4 pe-5"
                                type="text" placeholder="Eg: Thailand" name="search">
                            <button type="submit"
                                class="btn btn-primary rounded-1 py-2 px-4 position-absolute top-0 end-0 me-2"
                                style="margin-top: 7px;">Search</button>
                            <div id="searchPopup" class="search-popup rounded-1" style="font-size: 15px;">
                                <!-- Content of the search popup -->
                                <!--<p>This is the search popup content.</p>-->
                                <div class="price-range-container">
                                    <label class="price-range-text" for="priceRangeSlider">Price range</label>
                                    <div class="slider-container">
                                        <span class="slider-label-start">Free</span>
                                        <span class="slider-track"></span>
                                        <span class="slider-thumb" id="sliderThumb"></span>
                                        <span class="slider-thumb" id="sliderThumb1"></span>
                                        <span class="slider-label-end">$5000</span>
                                        <span class="slider-amount" id="sliderAmount1"></span>
                                        <span class="slider-amount" id="sliderAmount2"></span>
                                    </div>
                                </div>
                                <section class="services">
                                    <div class="container text-center mt-4">

                                        <div class="row">
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-map"></i></div>
                                                <div class="text">
                                                    <h3 class="h6" style="text-align:left;">Type of Operator</h3>
                                                </div>
                                            </div>
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-cityscape"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="radio" id="tour_operator" name="type"
                                                        value="tour_operator">
                                                    <label for="tour_operator">Tour Operator</label>
                                                </div>
                                            </div>
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-script"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="radio" id="tour_guide" name="type" value="tour_guide">
                                                    <label for="tour_guide">Tour Guide</label>
                                                </div>
                                            </div>
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-script"></i></div>
                                                <div class="text" style="text-align:left;">
                                                </div>
                                            </div>
                                        </div><!--row-->
                                    </div><!--container -->
                                </section>

                                <section class="services">
                                    <div class="container text-center mt-4">
                                        <div class="row mt-2">
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-map"></i></div>
                                                <div class="text">
                                                    <h3 class="h6">Language</h3>
                                                </div>
                                            </div>
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <select name="language" id="" class="fonr-control">
                                                    <option value="" selected disabled>Select Language</option>
                                                    @forelse ($languages as $language)
                                                        <option value="{{ $language->id }}">{{ $language->name }}</option>

                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div><!--row-->

                                    </div><!--container -->
                                </section>


                                <section class="services">
                                    <div class="container text-center mt-4">
                                        <div class="row">
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-map"></i></div>
                                                <div class="text">
                                                    <h3 class="h6" style="text-align:left;">Activities</h3>
                                                </div>
                                            </div>
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-cityscape"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="checkbox" id="nightlife_bar" value="nightlife_bar"
                                                        name="activity[]">
                                                    <label for="nightlife_bar">Nightlife & Bars</label>
                                                </div>
                                            </div>
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-script"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="checkbox" id="food_restaurant" value="food_restaurant"
                                                        name="activity[]">
                                                    <label for="food_restaurant">Food & Restaurants</label>

                                                </div>
                                            </div>
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-script"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="checkbox" id="history_culture" value="history_culture"
                                                        name="activity[]">
                                                    <label for="history_culture">History & Culture</label>

                                                </div>
                                            </div>
                                        </div><!--row-->
                                        <div class="row mt-2">
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-map"></i></div>
                                                <div class="text">

                                                </div>
                                            </div>
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-cityscape"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="checkbox" id="shopping" value="shopping"
                                                        name="activity[]">
                                                    <label for="shopping">Shopping</label>

                                                </div>
                                            </div>
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-script"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="checkbox" id="sport_recreat" value="sport_recreat"
                                                        name="activity[]">
                                                    <label for="sport_recreat">Sports & Recreat.</label>

                                                </div>
                                            </div>
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-script"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="checkbox" id="exploration_sight"
                                                        value="exploration_sight" name="activity[]">
                                                    <label for="exploration_sight">Exploration & Sight</label>

                                                </div>
                                            </div>
                                        </div><!--row-->

                                        <div class="row mt-2">
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-map"></i></div>
                                                <div class="text">

                                                </div>
                                            </div>
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-cityscape"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="checkbox" id="translation_interpret" name="activity[]"
                                                        value="translation_interpret">
                                                    <label for="translation_interpret">Translation & Interpret.</label>


                                                </div>
                                            </div>
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-script"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="checkbox" id="pickup_driving" name="activity[]"
                                                        value="pickup_driving">
                                                    <label for="pickup_driving">PickUp & Driving Tours</label>


                                                </div>
                                            </div>
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-script"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="checkbox" id="art_museum" name="activity[]"
                                                        value="art_museum">
                                                    <label for="art_museum">Art & Museums</label>


                                                </div>
                                            </div>
                                        </div><!--row-->


                                    </div><!--container -->
                                </section>

                                <section class="services">
                                    <div class="container text-center mt-4">

                                        <div class="row">
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-map"></i></div>
                                                <div class="text">
                                                    <h3 class="h6" style="text-align:left;">Gender</h3>
                                                </div>
                                            </div>
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-cityscape"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="radio" id="female" name="gender" value="female">
                                                    <label for="female">Female</label>
                                                </div>
                                            </div>
                                            <!-- Item-->
                                            <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-script"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="radio" id="male" name="gender" value="male">
                                                    <label for="male">Male</label>
                                                </div>
                                            </div>
                                            {{-- <div class="item col-lg-3">
                                                <div class="icon"><i class="icon-script"></i></div>
                                                <div class="text" style="text-align:left;">
                                                    <input type="radio" id="checkbox3" name="gender">
                                                    <label for="checkbox3">Couple</label>

                                                </div>
                                            </div> --}}
                                        </div><!--row-->
                                    </div><!--container -->
                                </section>
                            </div>
                        </div>
                    </form>
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
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
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
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours
                            </p>
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


    <!-- Tour Guide Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tour Guide</h6>
                <h1 class="mb-5">Find Your Tour Guide</h1>
            </div>
            <div class="row g-4 justify-content-center tourguide-container">
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


    <!-- Destination Start -->
    {{-- <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('site/img/destination-1.jpg') }}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30%
                                    OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Thailand</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('site/img/destination-2.jpg') }}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">25%
                                    OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Malaysia</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('site/img/destination-3.jpg') }}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">35%
                                    OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Australia</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('site/img/destination-4.jpg') }}" alt="" style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF
                        </div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Indonesia
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Destination Start -->


    <!-- Tour Packages Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tour Operators</h6>
                <h1 class="mb-5">Find Your Tour Operators</h1>
            </div>
            <div class="row g-4 justify-content-center tourOperator-container">
                @forelse ($tourPackages as $tourPackage)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset($tourPackage->cover_image) }}"
                                    alt="">
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
                                    <a href="{{ url('tour-operator/view/' . $tourPackage->id) }}"
                                        class="btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Know More</a>
                                    @auth('tourist')
                                        <a href="javascript:void(0)" class="btn btn-sm btn-primary px-3 enquireNow"
                                            data-id="{{ $tourPackage->id }}" style="border-radius: 0 30px 30px 0;">Enquire
                                            Now</a>
                                    @else
                                        <a href="{{ route('findCompanion') }}" class="btn btn-sm btn-primary px-3"
                                            style="border-radius: 0 30px 30px 0;">Enquire Now</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4 class="text-secondary text-center wow fadeInUp" data-wow-delay="0.1s"><i
                            class="fa fa-exclamation-triangle"></i> No tour guides available at the moment.</h4>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Tour Packages End -->


    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                            et eos. Clita erat ipsum et lorem et sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                            et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat
                            amet</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Book A Tour</h1>
                        <form id="addRequest">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" name="where_to_go" class="form-control bg-transparent"
                                            id="name" placeholder="Where next?">
                                        <label for="name">Where
                                            are you going?</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="dt_pickr" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent datetimepicker-input"
                                            id="from_date" placeholder="From Date" name="from_date" data-target="#date3"
                                            data-toggle="datetimepicker" />
                                        <label for="datetime">From Date</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="dt_pickr1" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent datetimepicker-input"
                                            id="to_date" placeholder="To Date" name="to_date" data-target="#date4"
                                            data-toggle="datetimepicker" />
                                        <label for="datetime">To Date</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" name="no_of_people" id="select1">
                                            <option value="1">Just me</option>
                                            <option value="2">Two people</option>
                                            <option value="3">Three people</option>
                                            <option value="0">More than Three</option>
                                        </select>
                                        <label for="select1">No of people</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" name="message" placeholder="Special Request" id="message"
                                            style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum
                            et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum
                            et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum
                            et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->


@endsection
@section('website-custom-script')
    <script>
        $('#addRequest').submit(function(e) {
            e.preventDefault();
            const data = $(this).serialize();
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });
            $.ajax({
                type: "post",
                url: "{{ route('tourist.trip.request-trip') }}",
                data: data,
                success: function(response) {
                    console.log(response);
                }
            });
        });

        $('#searchForm').submit(function(e) {
            e.preventDefault();
            const data = $(this).serialize();
            $.ajax({
                type: "get",
                url: "{{ route('search') }}",
                data: data,
                success: function(response) {
                    console.log(response);
                    if (response.type == 'tourOperator') {
                        $('.tourOperator-container').html(response.html);
                    } else {
                        $('.tourguide-container').html(response.html);
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const searchPopup = document.getElementById('searchPopup');
            const sliderThumb1 = document.getElementById('sliderThumb');
            const sliderThumb2 = document.getElementById('sliderThumb1');
            const sliderContainer = document.querySelector('.slider-container');

            let activeThumb = null;
            sliderThumb1.style.left = '0%'; // Position the first thumb at the start
            sliderThumb2.style.left = '100%'; // Position the second thumb at the end

            function moveSlider(event) {
                // Check if it's a touch event
                const clientX = event.type.startsWith('touch') ? event.touches[0].clientX : event.clientX;

                // Calculate position relative to the slider container
                const sliderRect = sliderContainer.getBoundingClientRect();
                let position = (clientX - sliderRect.left) / sliderRect.width * 100;
                position = Math.max(0, Math.min(100, position)); // Clamp position between 0 and 100

                // Update the position of the active thumb
                activeThumb.style.left = position + '%';

                // Get the id of the active slider thumb
                const activeThumbId = activeThumb.id;

                // Update the amount position for both slider thumbs
                const sliderAmount1 = document.getElementById('sliderAmount1');
                const sliderAmount2 = document.getElementById('sliderAmount2');

                if (activeThumbId.slice(-1) === 'b') {
                    sliderAmount1.style.left = position + '%';
                    sliderAmount1.textContent = '$' + calculateAmount(
                        position); // Calculate amount based on position
                } else {
                    sliderAmount2.style.left = position + '%';
                    sliderAmount2.textContent = '$' + calculateAmount(
                        position); // Calculate amount based on position
                }
            }

            // Function to calculate amount based on slider position
            function calculateAmount(position) {
                const minAmount = 0;
                const maxAmount = 5000;
                return Math.round(minAmount + (maxAmount - minAmount) * position / 100);
            }


            // Event listeners for the first slider thumb
            sliderThumb1.addEventListener('mousedown', startSliderMove);
            sliderThumb1.addEventListener('touchstart', startSliderMove);

            // Event listeners for the second slider thumb
            sliderThumb2.addEventListener('mousedown', startSliderMove);
            sliderThumb2.addEventListener('touchstart', startSliderMove);

            // Function to start slider movement
            function startSliderMove(event) {
                event.preventDefault();

                // Determine the active thumb
                activeThumb = event.target;

                // Add event listeners for slider movement
                document.addEventListener('mousemove', moveSlider);
                document.addEventListener('touchmove', moveSlider);

                // Add event listener for ending slider movement
                document.addEventListener('mouseup', endSliderMove);
                document.addEventListener('touchend', endSliderMove);
            }

            // Function to end slider movement
            function endSliderMove() {
                // Remove event listeners for slider movement
                document.removeEventListener('mousemove', moveSlider);
                document.removeEventListener('touchmove', moveSlider);

                // Remove event listener for ending slider movement
                document.removeEventListener('mouseup', endSliderMove);
                document.removeEventListener('touchend', endSliderMove);

                // Reset the active thumb
                activeThumb = null;
            }

            // Event listener for mouse click inside the textbox
            searchInput.addEventListener('click', function() {
                searchPopup.style.display = 'block';
                const container = document.querySelector('.container-fluid.bg-primary');
                container.style.height = '170vh';
            });

            // Event listener for shifting focus from the textbox
            document.addEventListener('click', function(event) {
                if (event.target !== searchInput) {
                    // Check if the click was outside the search popup before hiding it
                    if (!searchPopup.contains(event.target)) {
                        searchPopup.style.display = 'none';
                        const container = document.querySelector('.container-fluid.bg-primary');
                        container.style.height = '100vh';
                    }
                }
            });
        });
    </script>
@endsection
