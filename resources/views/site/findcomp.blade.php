@extends('site.layout.main')

@section('page-title', 'Find Companion')
@section('website-custom-style')

@endsection
@section('website-main-section')


<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown">Find Companion</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Find Companion</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->
<!-- Contact Start -->
<div class="container-xxl py-5">
<div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Login or Sign Up</h6>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        </div>
        <div id="divLogin" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <form>
                <div class="row g-3" style="padding-bottom:20px">
                </div>
                <div class="col-12" style="padding-top:12px">
                    <button class="btn btn-primary w-100 py-3" type="submit" style="background-color:#c9453a">Continue with Google <i class="fab fa-google"></i></button>
                </div>
                <div class="col-12" style="padding-top:12px">
                    <button class="btn btn-primary w-100 py-3" type="submit" style="background-color:#1A73E8">Continue with facebook <i class="fab fa-facebook"></i></button>
                </div>
            </form>

        </div>
    </div>
</div>
</div>
<!-- Contact End -->
@endsection
@section('website-custom-script')

@endsection
