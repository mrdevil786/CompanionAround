@extends('layout.main')

@section('page-title', 'Tourists')

@section('main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">Manage Tourists</h1>
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
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-20p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Email</th>
                                    <th class="wd-15p border-bottom-0">Id</th>
                                    <th class="wd-25p border-bottom-0">Created At</th>
                                    <th class="wd-25p border-bottom-0">Updated At</th>
                                    @if (auth()->user()->user_role == 1)
                                        <th class="wd-25p border-bottom-0">Status</th>
                                    @endif
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tourists as $tourist)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                class="nav-link leading-none d-flex">
                                                <img src="{{ $tourist->avatar }}"
                                                    alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                        </td>

                                        <td>{{ $tourist->full_name }}</td>

                                        <td>{{ $tourist->email }}</td>

                                        <td class="text-center">
                                            <i class="fa fa-{{ $tourist->social }}" aria-hidden="true"></i>
                                        </td>

                                        <td>{{ $tourist->created_at }}</td>

                                        <td>{{ $tourist->updated_at }}</td>

                                        @if (auth()->user()->user_role == 1)
                                            <td class="text-center">
                                                <label class="custom-switch form-switch mb-0">
                                                    <input type="checkbox" name="custom-switch-radio"
                                                        class="custom-switch-input" data-status-id="{{ $tourist->id }}"
                                                        {{ $tourist->status == 'active' ? 'checked' : '' }}>
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        @endif

                                        <td class="text-center">
                                            <x-buttons.action-pill-button iconClass="fa fa-eye" iconColor="secondary" />

                                            @if (auth()->user()->user_role != 3)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.tourists.edit', $tourist->id) }}"
                                                    iconClass="fa fa-pencil" iconColor="warning"
                                                    modalTarget="editUserModal" />
                                            @endif
                                            @if (auth()->user()->user_role == 1)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.tourists.destroy', $tourist->id) }}"
                                                    iconClass="fa fa-trash" iconColor="danger" />
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
        $(document).ready(function() {
            $('input[name="custom-switch-radio"]').change(function() {
                var userId = $(this).data('status-id');
                var status = $(this).prop('checked') ? 'active' : 'blocked';

                $.ajax({
                    url: "{{ route('admin.tourists.status') }}",
                    method: "PUT",
                    data: {
                        id: userId,
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
