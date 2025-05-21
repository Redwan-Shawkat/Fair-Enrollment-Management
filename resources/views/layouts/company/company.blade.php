@extends('layouts.app')
@section('title', 'Company')
@section('content')
    <!--begin::Toolbar-->
    <div class="card mb-xl-8 mb-5">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <!--begin::Toolbar container-->
            @include('layouts.company.partials.tabletop_aboutit')
            <!--end::Toolbar container-->
        </div>
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            @include('layouts.company.partials.tabletop')
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="gs-0 gy-4 table-bordered table align-middle">
                    <!--begin::Table head-->
                    <thead>
                        @include('layouts.company.partials.tablehead')
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @include('layouts.company.partials.tablebody')
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->

        {{-- Adding Footer --}}
        @include('layouts.company.partials.table_footer')
    </div>
@endsection
