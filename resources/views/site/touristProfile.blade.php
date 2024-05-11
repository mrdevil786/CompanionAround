@extends('site.layout.main')

@section('website-page-title', 'Profile')
@section('website-custom-style')
    <style>
    </style>
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

    <div class="container-xxl py-5">
        <div class="container">
            <h2 class="user-name">Welcome - {{ $user->full_name }}</h2>
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3 mb-5">My Dashboard</h6>
            </div>
            <div class="row g-4">
                <div class="col-lg-2">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link rounded-1 active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">Dashboard</button>
                        <button class="nav-link rounded-1" id="v-pills-history-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-history" type="button" role="tab" aria-controls="v-pills-history"
                            aria-selected="false">History</button>
                        <button class="nav-link rounded-1" id="v-pills-package-enquiry-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-package-enquiry" type="button" role="tab"
                            aria-controls="v-pills-package-enquiry" aria-selected="false">Package Enquiry</button>
                        <div class="col-12 mt-5">
                            <a href="{{ route('tourist.tourist.logout') }}" class="btn btn-secondary rounded-1 w-100"
                                type="submit">Logout <i class="fas fa-sign-out-alt ms-2"></i>
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
                                                <i class="fa fa-3x fa-hourglass-half text-primary mr-2"></i>
                                                <h5 class="mb-0" style="margin-left: 60px !important">
                                                    {{ $totalPendingRequest ?? 0 }}</h5>
                                            </div>
                                            <h5 style="text-align:center">Pending Request</h5>
                                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="service-item rounded pt-3">
                                        <div class="p-4">
                                            <div class="d-flex justify-content-start align-items-center mb-2">
                                                <i class="fa fa-3x fa-link text-primary mr-2"></i>
                                                <h5 class="mb-0" style="margin-left: 60px !important">
                                                    {{ $totalConnected ?? 0 }}</h5>
                                            </div>
                                            <h5 style="text-align:center">Total Connected</h5>
                                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-history" role="tabpanel"
                            aria-labelledby="v-pills-history-tab">
                            <div class="container">
                                <div class="table-responsive">
                                    <table id="profile-table" class="table">
                                        <thead>
                                            <tr>
                                                <th>#Sr.No</th>
                                                <th>Status</th>
                                                <th>Tour Guide</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Gender</th>
                                                <th>Guide Type</th>
                                                <th>Charges</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Country</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($connectionHistory as $history)
                                                @php
                                                    $guide = json_decode($history->guide_data);
                                                @endphp
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill bg-warning">{{ Str::ucfirst($history->status) }}</span>
                                                    </td>
                                                    <td>{{ $guide->name }}</td>
                                                    <td>{{ $guide->email }}</td>
                                                    <td>{{ $guide->mobile }}</td>
                                                    <td>{{ Str::ucfirst($guide->gender) }}</td>
                                                    <td>{{ Str::ucfirst($guide->guide_type) }}</td>
                                                    <td>{{ $guide->charges ?? '-' }}</td>
                                                    <td>{{ $guide->city }}</td>
                                                    <td>{{ $guide->state }}</td>
                                                    <td>{{ $guide->country }}</td>
                                                    <td><span class="badge rounded-pill bg-success">
                                                            {{ date('M jS, Y h:i A', strtotime($history->created_at)) }}</span>
                                                    </td>
                                                </tr>

                                            @empty
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-package-enquiry" role="tabpanel"
                            aria-labelledby="v-pills-package-enquiry-tab">
                            <div class="container">
                                <div class="table-responsive">
                                    <table id="enquiry-table" class="table">
                                        <thead>
                                            <tr>
                                                <th>#Sr.No</th>
                                                <th>Package</th>
                                                <th>Price</th>
                                                <th>Days</th>
                                                <th>Nights</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($packageEnquiries as $enquiry)
                                                @php
                                                    $package = json_decode($enquiry->package_data);
                                                @endphp
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $package->title }}</td>
                                                    <td>{{ $package->price }}</td>
                                                    <td>{{ $package->days }}</td>
                                                    <td>{{ $package->nights }}</td>
                                                    <td><span class="badge rounded-pill bg-success">
                                                            {{ date('M jS, Y h:i A', strtotime($enquiry->created_at)) }}</span>
                                                    </td>
                                                </tr>

                                            @empty
                                            @endforelse
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
        new DataTable('#enquiry-table', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    </script>
@endsection
