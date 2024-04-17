@extends('layout.main')

@section('page-title', 'Tour Guides Profile')

@section('main-section')
    <section>
        <div class="row">
            <div class="card">
                <div class="card-body d-flex">
                    <span class="me-5">Name : {{ $guide->name }}</span>
                    <span class="me-5 mx-5">Email : {{ $guide->email }}</span>
                    <span class="me-5 mx-5">Mobile : {{ $guide->mobile }}</span>
                    <span class="me-5 mx-5">Gender : {{ Str::ucfirst($guide->gender) }}</span>
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
                                    <th>Tourist</th>
                                    <th>Email</th>
                                    <th>Connected At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($guide->touristguide as $tourist)
                                    @php
                                        $history = json_decode($tourist->tourist_data);
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <span
                                                class="badge rounded-pill bg-warning">{{ Str::ucfirst($tourist->status) }}</span>
                                        </td>
                                        <td>{{ $history->full_name }}</td>
                                        <td>{{ $history->email }}</td>
                                        <td>
                                            @if ($tourist->status == 'accept')
                                                <span class="badge rounded-pill bg-success">
                                                    {{ date('M jS, Y h:i A', strtotime($tourist->connected_at)) }}</span>
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
