@extends('layout.main')

@section('page-title', 'Tourist Profile')

@section('main-section')
    <section>
        <div class="row">
            <div class="card">
                <div class="card-body d-flex">
                    <span class="me-5">Name : {{ $tourist->full_name }}</span>
                    <span class="me-5 mx-5">Email : {{ $tourist->email }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Connection History</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="history-table" class="table">
                            <thead>
                                <tr>
                                    <th>#Sr.No</th>
                                    <th>Status</th>
                                    <th>Tourist Guide</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Connected At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tourist->touristguide as $guide)
                                    @php
                                        $history = json_decode($guide->guide_data);
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <span
                                                class="badge rounded-pill bg-warning">{{ Str::ucfirst($guide->status) }}</span>
                                        </td>
                                        <td>{{ $history->name }}</td>
                                        <td>{{ $history->email }}</td>
                                        <td>{{ $history->mobile }}</td>
                                        <td>
                                            @if ($guide->status == 'accepted')
                                                <span class="badge rounded-pill bg-success">
                                                    {{ date('M jS, Y h:i A', strtotime($guide->connected_at)) }}</span>
                                            @else
                                                {{ '-' }}
                                            @endif
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
