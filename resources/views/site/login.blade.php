@extends('site.layout.main')

@section('page-title', 'Find Companion')
@section('website-custom-style')
    <style>
        .btnSlider {
            height: 60px;
            width: 357px;
            margin: 20px auto;
            box-shadow: 10px 10px 30px #86B817;
            border-radius: 50px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .login,
        .signup {
            font-size: 22px;
            border: none;
            outline: none;
            background-color: transparent;
            position: relative;
            cursor: pointer;
        }
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
                <h6 class="section-title bg-white text-center text-primary px-3">Login or Sign Up</h6>
                <!--<h1 class="mb-5">Contact For Any Query</h1>-->
                <div class="btnSlider">
                    <button id="btnLogin" class="login" onclick="ShowHide(1)"><span id="spanLogin"
                            style="color:#86B817 !important">Login</span></button>
                    <button id="btnSignUp" class="signup" onclick="ShowHide(2)"><span id="spanSignup"
                            style="color:#000 !important">Signup</span></button>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!--<h5>Get In Touch</h5>
                                                                                                                                                                                                                                                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos</p>
                                                                                                                                                                                                                                                        <div class="d-flex align-items-center mb-4">
                                                                                                                                                                                                                                                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                                                                                                                                                                                                                                                <i class="fa fa-map-marker-alt text-white"></i>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                            <div class="ms-3">
                                                                                                                                                                                                                                                                <h5 class="text-primary">Office</h5>
                                                                                                                                                                                                                                                                <p class="mb-0">123 Street, New York, USA</p>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                        <div class="d-flex align-items-center mb-4">
                                                                                                                                                                                                                                                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                                                                                                                                                                                                                                                <i class="fa fa-phone-alt text-white"></i>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                            <div class="ms-3">
                                                                                                                                                                                                                                                                <h5 class="text-primary">Mobile</h5>
                                                                                                                                                                                                                                                                <p class="mb-0">+012 345 67890</p>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                        <div class="d-flex align-items-center">
                                                                                                                                                                                                                                                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                                                                                                                                                                                                                                                <i class="fa fa-envelope-open text-white"></i>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                            <div class="ms-3">
                                                                                                                                                                                                                                                                <h5 class="text-primary">Email</h5>
                                                                                                                                                                                                                                                                <p class="mb-0">info@example.com</p>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </div>-->
                </div>
                <div id="divLogin" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!--<iframe class="position-relative rounded w-100 h-100"
                                                                                                                                                                                                                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                                                                                                                                                                                                                                                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                                                                                                                                                                                                                                                        tabindex="0"></iframe>-->
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
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Enter the password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                        </div>
                        <!--</div>-->
                    </form>

                </div>
                <div id="divSignup" class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s" style="display:none">
                    <form id="sign-up">
                        <div class="row g-3">
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
                                        placeholder="Mobile" maxLength="10" pattern="[1-9]{1}[0-9]{9}">
                                    <label for="mobile">Mobile</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input class="form-control" placeholder="Password" name="password"
                                        id="message"></input>
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
    <!-- Contact End -->
@endsection
@section('website-custom-script')
    <script>
        function ShowHide(flag) {
            if (flag == "1") {
                document.getElementById("spanLogin").style.color = "#86B817";
                document.getElementById("spanSignup").style.color = "#000";
                document.getElementById("divLogin").style.display = "block";
                document.getElementById("divSignup").style.display = "none";
            } else {
                document.getElementById("spanLogin").style.color = "#000";
                document.getElementById("spanSignup").style.color = "#86B817";
                document.getElementById("divLogin").style.display = "none";
                document.getElementById("divSignup").style.display = "block";
            }
        }
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
                        window.location.href = "{{ route('tourguide.guide') }}"
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
                type: "post",
                url: "{{ route('post-login') }}",
                data: data,
                success: function(response) {
                    Notiflix.Loading.remove();
                    console.log(response);
                    if (response.success) {
                        Notiflix.Notify.success(response.message);
                        console.log(response.route);
                        window.location.href = response.route;
                    }
                }
            });
        });
    </script>
@endsection
