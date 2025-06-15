<div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
    <!--begin::Title-->
    <h1 class="page-heading d-flex fw-bold fs-3 flex-column justify-content-center my-0 text-gray-900">
        @yield('form_label')
    </h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <span class="text-muted text-hover-primary">@yield('item', 'Form')</span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet w-5px h-2px bg-gray-500"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">@yield('topic', 'Company')</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
</div>
