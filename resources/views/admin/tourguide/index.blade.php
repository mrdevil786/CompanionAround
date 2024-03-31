@extends('layout.main')

@section('page-title', 'Tour Guides')

@section('main-section')
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tour Guides</h3>
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
                                    <th class="wd-15p border-bottom-0">Gender</th>
                                    <th class="wd-15p border-bottom-0">Guide Type</th>
                                    <th class="wd-15p border-bottom-0">Charges</th>
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
                                @foreach ($tourGuides as $guide)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $guide->name }}</td>
                                        <td>{{ $guide->email }}</td>
                                        <td>{{ $guide->mobile }}</td>
                                        <td>{{ Str::ucfirst($guide->gender) }}</td>
                                        <td>{{ Str::ucfirst($guide->guide_type) }}</td>
                                        <td>{{ $guide->charges ?? '-' }}</td>
                                        <td>{{ Str::ucfirst($guide->city) }}</td>
                                        <td>{{ Str::ucfirst($guide->state) }}</td>
                                        <td>{{ Str::ucfirst($guide->country) }}</td>
                                        <td>{{ $guide->short_description }}</td>
                                        <td>{{ $guide->created_at }}</td>
                                        <td>{{ $guide->updated_at }}</td>
                                        <td class="text-center">
                                            @if (auth()->user()->user_role == 1)
                                                <label class="custom-switch form-switch mb-0">
                                                    <input type="checkbox" name="custom-switch-radio"
                                                        class="custom-switch-input" data-status-id="{{ $guide->id }}"
                                                        {{ $guide->status == 'active' ? 'checked' : '' }}>
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            @endif
                                            {{ $guide->status }}

                                        </td>
                                        {{-- <td class="text-center">
                                            <x-buttons.action-pill-button iconClass="fa fa-eye" iconColor="secondary" />

                                            @if (auth()->user()->user_role != 3)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.users.edit', $guide->id) }}"
                                                    iconClass="fa fa-pencil" iconColor="warning"
                                                    modalTarget="editUserModal" />
                                            @endif
                                            @if (auth()->user()->user_role == 1)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.users.destroy', $guide->id) }}"
                                                    iconClass="fa fa-trash" iconColor="danger" />
                                            @endif
                                        </td> --}}
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
