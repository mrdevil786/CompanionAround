@extends('site.layout.main')

@section('website-page-title', 'Profile')
@section('website-custom-style')
<style>
</style>
@endsection
@section('website-main-section')



<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown">Login</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">login or Sign Up</li>
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
        <h6 class="section-title bg-white text-center text-primary px-3 mb-5">My Profile</h6>
        <!--<h1 class="mb-5">Contact For Any Query</h1>-->
    </div>
    <div class="row g-4">
        <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link rounded-pill active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</button>
                  <button class="nav-link rounded-pill" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                  <button class="nav-link rounded-pill" id="v-pills-history-tab" data-bs-toggle="pill" data-bs-target="#v-pills-history" type="button" role="tab" aria-controls="v-pills-history" aria-selected="false">History</button>
                  <button class="nav-link rounded-pill" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id impedit fugiat, maiores perspiciatis repellendus neque voluptates, cupiditate harum animi reprehenderit rerum excepturi aspernatur accusamus assumenda, laudantium delectus commodi! Esse, fugit.</div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">This is profile tab.</div>
                  <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">This is history tab.</div>
                  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">This is setting tab.</div>
                </div>
              </div>
        </div>
    </div>
</div>
</div>
<!-- Contact End -->
@endsection
@section('website-custom-script')
<script>
</script>
@endsection
