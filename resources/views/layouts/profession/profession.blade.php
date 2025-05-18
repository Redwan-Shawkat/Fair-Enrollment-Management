@extends('layouts.app')
@section('title', 'Profession')
@section('content')

    {{-- PAGINATION ARROW  --}}
    <style>
        svg.w-5.h-5 {
            width: 20px !important;
            height: 20px !important;
            max-width: 100% !important;
            max-height: 100% !important;
        }
    </style>

    <!--begin::Toolbar-->
    <div class="card mb-xl-8 mb-5">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <!--begin::Toolbar container-->
            @include('layouts.profession.partials.tabletop_aboutit')
            <!--end::Toolbar container-->
        </div>
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            @include('layouts.profession.partials.tabletop')
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
                        @include('layouts.profession.partials.tablehead')
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @include('layouts.profession.partials.tablebody')
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->

        {{-- Adding Footer --}}
        @include('layouts.profession.partials.table_footer')
    </div>
@endsection
