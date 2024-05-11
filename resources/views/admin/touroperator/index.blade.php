@extends('layout.main')

@section('page-title', 'Tour Operators')

@section('main-section')
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tour Operators</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottomm" id="file-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-20p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Email</th>
                                    <th class="wd-15p border-bottom-0">Mobile</th>
                                    <th class="wd-15p border-bottom-0">Address</th>
                                    <th class="wd-15p border-bottom-0">Zipcode</th>
                                    <th class="wd-15p border-bottom-0">City</th>
                                    <th class="wd-15p border-bottom-0">State</th>
                                    <th class="wd-15p border-bottom-0">Country</th>
                                    <th class="wd-15p border-bottom-0">Description</th>
                                    <th class="wd-25p border-bottom-0">Created At</th>
                                    <th class="wd-25p border-bottom-0">Updated At</th>
                                    <th class="wd-25p border-bottom-0">Status</th>
                                    {{-- <th class="wd-25p border-bottom-0">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tourOperators as $tourOperator)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a
                                                href="{{ route('admin.touroperators.profile', $tourOperator->id) }}">{{ $tourOperator->name }}</a>
                                        </td>
                                        <td>{{ $tourOperator->email }}</td>
                                        <td>{{ $tourOperator->mobile }}</td>
                                        <td>{{ ucfirst(Str::limit($tourOperator->address, 20) ?? 'NA') }}</td>
                                        <td>{{ $tourOperator->zipcode ?? 'NA' }}</td>
                                        <td>{{ Str::ucfirst($tourOperator->city ?? 'NA') }}</td>
                                        <td>{{ Str::ucfirst($tourOperator->state ?? 'NA') }}</td>
                                        <td>{{ Str::ucfirst($tourOperator->country ?? 'NA') }}</td>
                                        <td>{{ ucfirst(Str::limit($tourOperator->description, 20) ?? 'NA') }}</td>
                                        <td>{{ $tourOperator->created_at }}</td>
                                        <td>{{ $tourOperator->updated_at }}</td>
                                        <td class="text-center">
                                            @if (auth()->user()->user_role == 1)
                                                <label class="custom-switch form-switch mb-0">
                                                    <input type="checkbox" name="custom-switch-radio"
                                                        class="custom-switch-input"
                                                        data-status-id="{{ $tourOperator->id }}"
                                                        {{ $tourOperator->status == 'active' ? 'checked' : '' }}>
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            @endif
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
    <script>
        $(document).ready(function() {
            $('input[name="custom-switch-radio"]').change(function() {
                var id = $(this).data('status-id');
                var status = $(this).prop('checked') ? 'active' : 'blocked';

                $.ajax({
                    url: "{{ route('admin.tourguides.status') }}",
                    method: "PUT",
                    data: {
                        id: id,
                        status: status,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
