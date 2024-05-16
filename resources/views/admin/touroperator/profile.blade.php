@extends('layout.main')

@section('page-title', 'Tour Operator Profile')

@section('main-section')
    <section>
        <div class="row">
            <div class="card">
                <div class="card-body d-flex">
                    <span class="me-5">Business Name : {{ $tourOperators->name }}</span>
                    <span class="me-5 mx-5">Business Email : {{ $tourOperators->email }}</span>
                    <span class="me-5 mx-5">Business Mobile : {{ $tourOperators->mobile }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Packages</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table  class="table table-bordered text-nowrap border-bottomm" id="file-datatable">
                            <thead>
                                <tr>
                                    <th>#Sr.No</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>No Of Days</th>
                                    <th>No Of Nights</th>
                                    <th>Cover Image</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tourOperators->package as $package)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $package->title }}
                                        </td>
                                        <td>{{ $package->price }}</td>
                                        <td>{{ $package->days }}</td>
                                        <td>{{ $package->nights }}</td>
                                        <td><img src="{{ asset($package->cover_image) }}" alt="Tour Operator"></td>
                                        <td>{{ $package->description }}</td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">
                                                {{ date('M jS, Y h:i A', strtotime($package->created_at)) }}</span>
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
    </section>
@endsection

@section('custom-script')
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
    </script>
    <script></script>
@endsection
