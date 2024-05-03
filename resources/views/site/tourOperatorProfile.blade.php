@extends('site.layout.main')

@section('website-page-title', 'Tour-Operator Profile')

@section('website-custom-style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
@endsection

@section('website-main-section')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->

    {{-- ##############################################################################################     --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3 mb-5">My Dashboard</h6>
            </div>
            <div class="row g-4">
                <div class="col-lg-2">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link rounded-1 active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">Dashboard</button>
                        <button class="nav-link rounded-1" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Profile</button>
                        <button class="nav-link rounded-1" id="v-pills-connection-request" data-bs-toggle="pill"
                            data-bs-target="#v-pills-connection" type="button" role="tab"
                            aria-controls="v-pills-profile" aria-selected="false">Connection Request</button>
                        <button class="nav-link rounded-1" id="v-pills-history-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-history" type="button" role="tab" aria-controls="v-pills-history"
                            aria-selected="false">History</button>
                        <div class="col-12 mt-5">
                            <a href="{{ route('logout') }}" class="btn btn-secondary rounded-1 w-100" type="submit">Logout
                                <i class="fas fa-sign-out-alt ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="row g-4">
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="service-item rounded pt-3">
                                        <div class="p-4">
                                            <div class="d-flex justify-content-start align-items-center mb-2">
                                                <i class="fa fa-3x fa-globe text-primary mr-2"></i>
                                                <h5 class="mb-0" style="margin-left: 60px !important">3</h5>
                                            </div>
                                            <h5 style="text-align:center">WorldWide Tours</h5>
                                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="service-item rounded pt-3">
                                        <div class="p-4">
                                            <div class="d-flex justify-content-start align-items-center mb-2">
                                                <i class="fa fa-3x fa-hotel text-primary mr-2"></i>
                                                <h5 class="mb-0" style="margin-left: 60px !important">3</h5>
                                            </div>
                                            <h5 style="text-align:center">Hotel Reservation</h5>
                                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="service-item rounded pt-3">
                                        <div class="p-4">
                                            <div class="d-flex justify-content-start align-items-center mb-2">
                                                <i class="fa fa-3x fa-user text-primary mr-2"></i>
                                                <h5 class="mb-0" style="margin-left: 60px !important">3</h5>
                                            </div>
                                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                                            <h5 style="text-align:center">Travel Guides</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="service-item rounded pt-3">
                                        <div class="p-4">
                                            <div class="d-flex justify-content-start align-items-center mb-2">
                                                <i class="fa fa-3x fa-cog text-primary mr-2"></i>
                                                <h5 class="mb-0" style="margin-left: 60px !important">3</h5>
                                            </div>
                                            <h5 style="text-align:center">Event Management</h5>
                                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="service-item rounded pt-3">
                                        <div class="p-4">
                                            <div class="d-flex justify-content-start align-items-center mb-2">
                                                <i class="fa fa-3x fa-globe text-primary mr-2"></i>
                                                <h5 class="mb-0" style="margin-left: 60px !important">3</h5>
                                            </div>
                                            <h5 style="text-align:center">WorldWide Tours</h5>
                                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="service-item rounded pt-3">
                                        <div class="p-4">
                                            <div class="d-flex justify-content-start align-items-center mb-2">
                                                <i class="fa fa-3x fa-hotel text-primary mr-2"></i>
                                                <h5 class="mb-0" style="margin-left: 60px !important">3</h5>
                                            </div>
                                            <h5 style="text-align:center">Hotel Reservation</h5>
                                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="service-item rounded pt-3">
                                        <div class="p-4">
                                            <div class="d-flex justify-content-start align-items-center mb-2">
                                                <i class="fa fa-3x fa-user text-primary mr-2"></i>
                                                <h5 class="mb-0" style="margin-left: 60px !important">3</h5>
                                            </div>
                                            <h5 style="text-align:center">Travel Guides</h5>
                                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="service-item rounded pt-3">
                                        <div class="p-4">
                                            <div class="d-flex justify-content-start align-items-center mb-2">
                                                <i class="fa fa-3x fa-cog text-primary mr-2"></i>
                                                <h5 class="mb-0" style="margin-left: 60px !important">3</h5>
                                            </div>
                                            <h5 style="text-align:center">Event Management</h5>
                                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="container">
                                <div class="main-body">
                                    <div class="row gutters-sm">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex flex-column align-items-center text-center">
                                                        <img src="{{ asset($user->profile ?? 'site/img/no-profile.jpg') }}"
                                                            alt="Admin" class="rounded-circle" width="150">
                                                        <div class="mt-3">
                                                            <h4>{{ $user->name }}</h4>
                                                            <p class="text-muted font-size-sm">
                                                                {{ $user->city . ' ' . $user->state . ' ' . $user->country }}
                                                            </p>
                                                            <button class="btn btn-primary">Follow</button>
                                                            <button class="btn btn-outline-primary">Message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Full Name</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-primary">
                                                            {{ $user->name }}
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Email</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-primary">
                                                            {{ $user->email }}
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Mobile</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-primary">
                                                            {{ $user->mobile }}
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Address</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-primary">
                                                            {{ $user->city . ' ' . $user->state . ' ' . $user->country }}
                                                        </div>
                                                    </div>
                                                    <div class="row text-center">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-primary edit-profile"
                                                                data-id="{{ $user->id }}">Edit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-connection" role="tabpanel"
                            aria-labelledby="v-pills-connection-request">
                            <div class="container">
                                <div class="table-responsive">
                                    <table id="profile-table" class="table">
                                        <thead>
                                            <tr>
                                                <th>#Sr.No</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th>Tourist</th>
                                                <th>Email</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse ($connectionRequest as $cr)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill bg-warning">{{ Str::ucfirst($cr->status) }}</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void()"
                                                            class="btn btn-sm btn-success requestAction"
                                                            data-id={{ $cr->id }} data-action="accept"><i
                                                                class="fa fa-check"></i><br>
                                                            Accept</a>
                                                        <a href="javascript:void()"
                                                            class="btn btn-sm btn-danger requestAction"
                                                            data-id={{ $cr->id }} data-action="reject"><i
                                                                class="fa fa-check"></i><br> Reject</a>
                                                    </td>
                                                    <td>{{ $cr->tourist->full_name }}</td>
                                                    <td>{{ $cr->tourist->email }}</td>
                                                    <td><span class="badge rounded-pill bg-success">
                                                            {{ date('M jS, Y h:i A', strtotime($cr->created_at)) }}</span>
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-history" role="tabpanel"
                            aria-labelledby="v-pills-history-tab">
                            <div class="container">
                                <div class="table-responsive">
                                    <table id="history-table" class="table">
                                        <thead>
                                            <tr>
                                                <th>#Sr.No</th>
                                                <th>Status</th>
                                                <th>Tourist</th>
                                                <th>Email</th>
                                                <th>Connected At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse ($connectionHistory as $history)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill bg-warning">{{ Str::ucfirst($history->status) }}</span>
                                                    </td>
                                                    <td>{{ $history->tourist->full_name }}</td>
                                                    <td>{{ $history->tourist->email }}</td>
                                                    <td>
                                                        @if ($history->status == 'accept')
                                                            <span class="badge rounded-pill bg-success">
                                                                {{ date('M jS, Y h:i A', strtotime($history->connected_at)) }}</span>
                                                        @else
                                                            {{ '-' }}
                                                        @endif
                                                    </td>
                                                </tr>

                                            @empty
                                            @endforelse --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ##############################################################################################     --}}

    {{-- Edit profile Modal --}}
    <div class="modal fade" id="editProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="editProfileLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileLabel">Update Profile Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('touroperator.operator.update') }}" enctype="multipart/form-data"
                        method="post">
                        @csrf
                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <label for="name">Business Name</label>
                                <input type="text" class="form-control rounded-1" id="name" name="name"
                                    placeholder="Business Name">
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <label for="email">Business Email</label>
                                <input type="text" class="form-control rounded-1" id="email" name="email"
                                    placeholder="Business Email">
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <label for="mobile">Business Mobile</label>
                                <input type="text" class="form-control rounded-1" id="mobile" name="mobile"
                                    placeholder="Business Mobile">
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <label for="country">Your Country</label>
                                <input type="text" class="form-control rounded-1" id="country" name="country"
                                    placeholder="Your Country">
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <label for="state">Your State</label>
                                <input type="text" class="form-control rounded-1" id="state" name="state"
                                    placeholder="Your State">
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <label for="city">Your City</label>
                                <input type="text" class="form-control rounded-1" id="city" name="city"
                                    placeholder="Your City">
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <label for="zipcode">Zipcode</label>
                                <input type="text" class="form-control rounded-1" id="zipcode" name="zipcode"
                                    placeholder="Zipcode">
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <label for="profile">Business Logo</label>
                                <input type="file" class="form-control rounded-1" id="profile" name="profile"
                                    placeholder="Business Logo">
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control rounded-1" name="address" id="address" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control rounded-1" name="description" id="description" rows="2"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-md btn-success rounded-1">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('website-custom-script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>

    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
    <script>
        new DataTable('#profile-table', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
        new DataTable('#history-table', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });

        $('.edit-profile').on('click', function() {
            const id = $(this).data('id');
            const modal = $('#editProfile');
            if (id) {
                $.ajax({
                    type: "get",
                    url: "{{ route('touroperator.operator.edit', '+id+') }}",
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        $(modal).find('#name').val(response.name);
                        $(modal).find('#email').val(response.email);
                        $(modal).find('#mobile').val(response.mobile);
                        $(modal).find('#address').val(response.address);
                        $(modal).find('#zipcode').val(response.zipcode);
                        $(modal).find('#country').val(response.country);
                        $(modal).find('#state').val(response.state);
                        $(modal).find('#city').val(response.city);
                        $(modal).find('#description').val(response.description);
                    }
                });
            }
            $(modal).modal('show');
        });

        $('.requestAction').on('click', function() {
            const id = $(this).data('id');
            const action = $(this).data('action');
            if (confirm('Sure you want ' + action + ' ?')) {
                Notiflix.Loading.standard('Please wait...');
                $.ajax({
                    type: "post",
                    url: "{{ route('touroperator.operator.request-action') }}",
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}",
                        action: action
                    },
                    success: function(response) {
                        Notiflix.Loading.remove();
                        if (response.success == 'accepted') {
                            Notiflix.Notify.success(response.message);
                            setTimeout(() => {
                                location.reload();
                            }, 500);
                        } else if (response.success == 'rejected') {
                            Notiflix.Notify.failure(response.message);
                            setTimeout(() => {
                                location.reload();
                            }, 500);
                        }
                        console.log(response);
                    }
                });
            }
        });
    </script>
@endsection
