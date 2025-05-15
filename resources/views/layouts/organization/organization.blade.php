@extends('layouts.app')
@section('title', 'Organization')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
        @include('layouts.organization.partials.tableinfo')
    </div>
    <!--end::Toolbar-->
    <!--begin::Header-->
    <div class="card mb-xl-8 mb-5">
        @include('layouts.organization.partials.tabletop')
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="gs-0 gy-4 table align-middle">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bold text-muted bg-light">
                        @include('layouts.organization.partials.tablehead')
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    <tr>
                        @include('layouts.organization.partials.tablebody')
                    </tr>
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>

    <!--begin::Footer-->
    <div id="kt_app_footer" class="app-footer">
        @include('layouts.organization.partials.table_footer')
    </div>
    <!--end::Footer-->
    </div>
@endsection
