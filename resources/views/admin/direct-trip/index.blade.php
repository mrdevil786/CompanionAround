@extends('layout.main')

@section('page-title', 'Direct Trips')

@section('main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">Direct Trips</h1>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Tourists</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottomm" id="file-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Email</th>
                                    <th class="wd-20p border-bottom-0">Whete to go</th>
                                    <th class="wd-15p border-bottom-0">From Date</th>
                                    <th class="wd-15p border-bottom-0">To Date</th>
                                    <th class="wd-15p border-bottom-0">No Of People</th>
                                    <th class="wd-15p border-bottom-0">Message</th>
                                    <th class="wd-25p border-bottom-0">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trips as $trip)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            {{-- <a href="{{ route('admin.tourists.profile', $trip->tourist->id) }}">
                                            </a> --}}
                                            {{ $trip->tourist->full_name }}
                                        </td>

                                        <td>{{ $trip->tourist->email }}</td>

                                        <td>{{ $trip->where_you_go }}</td>
                                        <td><span class="badge rounded-pill bg-success">
                                                {{ date('M jS, Y', strtotime($trip->from_date)) }}</span></td>

                                        <td><span class="badge rounded-pill bg-success">
                                                {{ date('M jS, Y', strtotime($trip->to_date)) }}</span></td>
                                        <td>{{ $trip->no_of_people }}</td>
                                        <td>{{ $trip->message }}</td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">
                                                {{ date('M jS, Y h:i A', strtotime($trip->created_at)) }}</span>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection

@section('custom-script')
    <!-- DATA TABLE JS-->
    <script src="{{ asset('../assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('../assets/js/table-data.js') }}"></script>

    <script>
        $(document).ready(function() {});
    </script>
@endsection
