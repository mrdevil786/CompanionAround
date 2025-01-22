@extends('site.layout.main')

@section('website-page-title', 'Results')
@section('website-custom-style')

@endsection
@section('website-main-section')



    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Results</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="text-end">
        <button type="button" id="filterButton" class="btn btn-primary rounded-1 py-2 px-4 mx-4 position-relative mb-3"
            style="margin-top: 7px;">
            <i class="fas fa-filter"></i> Add Filter
        </button>

        <div id="searchPopup" class="search-popup rounded-1" style="font-size: 15px; display: none;">
            <!-- Content of the search popup -->
            <div class="price-range-container">
                <label class="price-range-text" for="priceRangeSlider"></label>
                <div class="">
                    <span class=""></span>
                    <span class="" id="sliderThumb"></span>
                    <span class="" id="sliderThumb1"></span>
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
                            <div class="icon"><i class="icon-script"></i></div>
                            <div class="text" style="text-align:left;">
                                <input type="radio" id="tour_guide" name="type" value="tour_guide">
                                <label for="tour_guide">Tour Guide</label>
                            </div>
                        </div>
                        <!-- Item-->
                        <div class="item col-lg-3">
                            <div class="icon"><i class="icon-cityscape"></i></div>
                            <div class="text" style="text-align:left;">
                                <input type="radio" id="tour_operator" name="type" value="tour_operator">
                                <label for="tour_operator">Tour Operator</label>
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
            <div class="tour_guide_section">
                <section class="services">
                    <div class="container mt-4">
                        <div class="row mt-2">
                            <!-- Item-->
                            <div class="item col-lg-3">
                                <div class="icon"><i class="icon-map"></i></div>
                                <div class="text">
                                    <h3 class="h6" style="text-align:left;">Language</h3>
                                </div>
                            </div>
                            <!-- Item-->
                            <div class="item col-lg-3">
                                <select name="language" id="" class="form-control" style="text-align:left;">
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
                                    <input type="checkbox" id="nightlife_bar" value="nightlife_bar" name="activity[]">
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
                                <div class="text"></div>
                            </div>
                            <!-- Item-->
                            <div class="item col-lg-3">
                                <div class="icon"><i class="icon-cityscape"></i></div>
                                <div class="text" style="text-align:left;">
                                    <input type="checkbox" id="shopping" value="shopping" name="activity[]">
                                    <label for="shopping">Shopping</label>
                                </div>
                            </div>
                            <!-- Item-->
                            <div class="item col-lg-3">
                                <div class="icon"><i class="icon-script"></i></div>
                                <div class="text" style="text-align:left;">
                                    <input type="checkbox" id="sport_recreat" value="sport_recreat" name="activity[]">
                                    <label for="sport_recreat">Sports & Recreat.</label>
                                </div>
                            </div>
                            <div class="item col-lg-3">
                                <div class="icon"><i class="icon-script"></i></div>
                                <div class="text" style="text-align:left;">
                                    <input type="checkbox" id="exploration_sight" value="exploration_sight"
                                        name="activity[]">
                                    <label for="exploration_sight">Exploration & Sight</label>
                                </div>
                            </div>
                        </div><!--row-->
                        <div class="row mt-2">
                            <!-- Item-->
                            <div class="item col-lg-3">
                                <div class="icon"><i class="icon-map"></i></div>
                                <div class="text"></div>
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
                                    <input type="checkbox" id="pickup_driving" name="activity[]" value="pickup_driving">
                                    <label for="pickup_driving">PickUp & Driving Tours</label>
                                </div>
                            </div>
                            <div class="item col-lg-3">
                                <div class="icon"><i class="icon-script"></i></div>
                                <div class="text" style="text-align:left;">
                                    <input type="checkbox" id="art_museum" name="activity[]" value="art_museum">
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
                        </div><!--row-->
                    </div><!--container -->
                </section>
            </div>
        </div>
    </div>

@endsection
@section('website-custom-script')

@endsection
