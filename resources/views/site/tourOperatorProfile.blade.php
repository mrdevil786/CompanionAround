@extends('site.layout.main')

@section('website-page-title', 'Tour Operator')

@section('website-custom-style')
    <style>
        .truncate-text {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>
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
    <script></script>
@endsection
