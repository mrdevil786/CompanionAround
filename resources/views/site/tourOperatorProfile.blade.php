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
                    <h1 class="display-3 text-white animated slideInDown">Tour Operator</h1>
                </div>
            </div>
        </div>
    </div>
    {{ auth('touroperator')->user()->name }}
    <!-- Navbar & Hero End -->
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

        $(document).on('change', '#guide_type', function() {
            const value = $(this).val();
            if (value == 'free') {
                $('.charges-div').attr('hidden', true);
            } else {
                $('.charges-div').attr('hidden', false);
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
                        $(modal).find('#guide_type').val(response.guide_type).trigger('change');
                        $('input[name="gender"][value="' + response.gender + '"]').prop('checked',
                            true);
                        if (response.guide_type === 'chargeable') {
                            $(modal).find('#charges').val(response.charges);
                        }
                        $(modal).find('#city').val(response.city);
                        $(modal).find('#state').val(response.state);
                        $(modal).find('#country').val(response.country);
                        $(modal).find('#short_description').val(response.short_description);
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
