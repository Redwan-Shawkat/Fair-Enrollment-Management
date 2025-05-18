<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
        <!--begin::Title-->
        <h1 class="page-heading d-flex fw-bold fs-3 flex-column justify-content-center my-0 text-gray-900">
            Tables
        </h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
                <a href="#" class="text-muted text-hover-primary">
                    {{-- Product --}}
                    @yield('table_name', 'Product Interest')
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            {{-- <li class="breadcrumb-item">
                <span class="bullet w-5px h-2px bg-gray-500"></span>
            </li> --}}
            <!--end::Item-->
            <!--begin::Item-->
            {{-- <li class="breadcrumb-item text-muted">Widgets</li> --}}
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page title-->
    <!--begin::Actions-->
    <div class="d-flex align-items-center gap-lg-3 gap-2">
        <!--begin::Filter menu-->
        <div class="m-0">
            <!--begin::Menu toggle-->
            @include('layouts.organization.partials.partials.filterbtn')
            <!--end::Menu 1-->
        </div>
        <!--end::Filter menu-->
        <!--begin::Secondary button-->
        <!--end::Secondary button-->
        <!--begin::Primary button-->
        <div class="m-0">
            @include('layouts.organization.partials.partials.createbtn')
        </div>
        <!--end::Primary button-->
    </div>
    <!--end::Actions-->
</div>
