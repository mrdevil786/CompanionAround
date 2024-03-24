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
                  <!--<button class="nav-link rounded-pill" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>-->
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="container">
                        <div class="main-body">
                              <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                  <div class="card" style="width:150%">
                                    <div class="card-body">
                                      <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                          <h4>John Doe</h4>
                                          <p class="mb-1" style="color: #86B817">Full Stack Developer</p>
                                          <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                          <button class="btn btn-primary">Follow</button>
                                          <button class="btn btn-outline-primary">Message</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  {{-- <div class="card mt-3">
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                        <span class="text-secondary">https://bootdey.com</span>
                                      </li>
                                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                                        <span class="text-secondary">bootdey</span>
                                      </li>
                                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                        <span class="text-secondary">@bootdey</span>
                                      </li>
                                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                        <span class="text-secondary">bootdey</span>
                                      </li>
                                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                        <span class="text-secondary">bootdey</span>
                                      </li>
                                    </ul>
                                  </div> --}}
                                </div>
                                <div class="col-md-8">
                                  <div class="card mb-3" style="margin-left: 6vw;width:178%">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9" style="color: #86B817">
                                          Kenneth Valdez
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9" style="color: #86B817">
                                          fip@jukmuh.al
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-9" style="color: #86B817">
                                          (239) 816-9029
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Mobile</h6>
                                        </div>
                                        <div class="col-sm-9" style="color: #86B817">
                                          (320) 380-4539
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-9" style="color: #86B817">
                                          Bay Area, San Francisco, CA
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-12">
                                          {{-- <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a> --}}
                                          <button class="btn btn-primary">Edit</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  {{-- <div class="row gutters-sm">
                                    <div class="col-sm-6 mb-3">
                                      <div class="card h-100">
                                        <div class="card-body">
                                          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                          <small>Web Design</small>
                                          <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <small>Website Markup</small>
                                          <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <small>One Page</small>
                                          <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <small>Mobile Template</small>
                                          <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <small>Backend API</small>
                                          <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                      <div class="card h-100">
                                        <div class="card-body">
                                          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                          <small>Web Design</small>
                                          <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <small>Website Markup</small>
                                          <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <small>One Page</small>
                                          <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <small>Mobile Template</small>
                                          <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <small>Backend API</small>
                                          <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div> --}}



                                </div>
                              </div>

                            </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
                    <table id="profile-table" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows will be added dynamically using jQuery -->
                            <tr>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>Admin</td>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>Admin</td>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>jane@example.com</td>
                                <td>User</td>
                                <td>Jane Smith</td>
                                <td>jane@example.com</td>
                                <td>User</td>
                                <td>Jane Smith</td>
                                <td>jane@example.com</td>
                                <td>User</td>
                            </tr>
                            <tr>
                                <td>Michael Johnson</td>
                                <td>michael@example.com</td>
                                <td>Moderator</td>
                                <td>Michael Johnson</td>
                                <td>michael@example.com</td>
                                <td>Moderator</td>
                                <td>Michael Johnson</td>
                                <td>michael@example.com</td>
                                <td>Moderator</td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                  <!--<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">This is setting tab.</div>-->
                </div>
              </div>
        </div>
    </div>
</div>
</div>
<!-- Contact End -->
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
    // $(document).ready(function() {
    //     // Example data for the table
    //     var userData = [
    //         { name: "John Doe", email: "john@example.com", role: "Admin" },
    //         { name: "Jane Smith", email: "jane@example.com", role: "User" },
    //         { name: "Michael Johnson", email: "michael@example.com", role: "Moderator" }
    //     ];

    //     // Loop through the user data and append rows to the table
    //     $.each(userData, function(index, user) {
    //         var row = '<tr>' +
    //                     '<td>' + user.name + '</td>' +
    //                     '<td>' + user.email + '</td>' +
    //                     '<td>' + user.role + '</td>' +
    //                   '</tr>';
    //         $('#profile-table tbody').append(row);
    //     });
    // });
    // $(document).ready(function() {
    //         $('#profile-table').DataTable();
    //     });
    new DataTable('#profile-table', {
    layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
    }
});
</script>
@endsection