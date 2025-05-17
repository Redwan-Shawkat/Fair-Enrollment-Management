@extends('layouts.app')
@section('title', 'Organization')
@section('content')
    <!--begin::Toolbar-->
    <div class="card mb-xl-8 mb-5">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <!--begin::Toolbar container-->
            @include('layouts.organization.partials.tabletop_aboutit')
            <!--end::Toolbar container-->
        </div>
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
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
                        @include('layouts.organization.partials.tablehead')
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @include('layouts.organization.partials.tablebody')
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->

        {{-- Adding Footer --}}
        @include('layouts.organization.partials.table_footer')
    </div>
@endsection
