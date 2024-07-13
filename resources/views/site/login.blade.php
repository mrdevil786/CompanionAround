@extends('site.layout.main')

@section('website-page-title', 'Login | Signup')

@section('website-custom-style')
@endsection

@section('website-main-section')

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Login | Signup</h1>
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
            <div class="row g-4 justify-content-center mt-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-1 active me-3" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true" style="border: 1px solid #86B817;">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-1" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false" style="border: 1px solid #86B817;">Signup</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <form id="post-login">
                                <div class="row g-3" style="padding-bottom:20px">
                                    <div class="col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio2"
                                                value="tour_guide">
                                            <label class="form-check-label" for="inlineRadio2">Tour Guide</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio1"
                                                value="tour_operator">
                                            <label class="form-check-label" for="inlineRadio1">Tour Operator</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="Enter the password">
                                            <label for="password">Password</label>
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                                </div>
                                <!--</div>-->
                            </form>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form id="sign-up">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio2"
                                                value="tour_guide">
                                            <label class="form-check-label" for="inlineRadio2">Tour Guide</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type"
                                                id="inlineRadio1" value="tour_operator">
                                            <label class="form-check-label" for="inlineRadio1">Tour Operator</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="mobile" name="mobile"
                                                placeholder="Mobile">
                                            <label for="mobile">Mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" placeholder="Password"
                                                name="password" id="message"></input>
                                            <label for="message">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Sign Up</button>
                                    </div>
                                </div>
                            </form>
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
        $('#sign-up').submit(function(e) {
            e.preventDefault();
            Notiflix.Loading.standard('Please wait...');
            const data = $(this).serialize();
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });
            $.ajax({
                type: "post",
                url: "{{ route('post-signup') }}",
                data: data,
                success: function(response) {
                    Notiflix.Loading.remove();
                    console.log(response);
                    if (response.success) {
                        Notiflix.Notify.success('SingUp Successfully!');
                        window.location.href = response.route;
                    }
                }
            });
        });
        $('#post-login').submit(function(e) {
            e.preventDefault();
            Notiflix.Loading.standard('Please wait...');
            const data = $(this).serialize();
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });
            $.ajax({
    type: "POST",
    url: "{{ route('post-login') }}",
    data: data,
    success: function(response) {
        Notiflix.Loading.remove();
        console.log(response);

        if (response.success) {
            Notiflix.Notify.success(response.message);
            console.log(response.route);
            window.location.href = response.route;
        } else {
            Notiflix.Notify.failure(response.message); 
            // Handle other scenarios if needed
        }
    },
    error: function(xhr, status, error) {
        Notiflix.Loading.remove();
        console.error(xhr.responseText);

        // Display a generic error message
        Notiflix.Notify.failure('An error occurred. Please try again.');
    }
});

        });
    </script>
@endsection
