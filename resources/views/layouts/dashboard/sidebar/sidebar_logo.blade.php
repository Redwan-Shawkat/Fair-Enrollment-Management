<!--begin::Logo image-->
<span>
    <!--
    <img alt="Logo" src="assets/media/logos/fairlogo-big.svg" class="h-25px w-200px app-sidebar-logo-default" />
    <img alt="Logo" src="assets/media/logos/fairlogo-small.svg" class="h-20px app-sidebar-logo-minimize" -->
    <img alt="Logo" src="{{ asset('assets/media/logos/fairlogo-big.svg') }}"
        class="h-25px w-200px app-sidebar-logo-default" />
    <img alt="Logo" src="{{ asset('assets/media/logos/fairlogo-small.svg') }}"
        class="h-20px app-sidebar-logo-minimize" />

    {{-- <h3 class="h-25px app-sidebar-logo-default"> LOGO PLACEMENT </h3> --}}
</span>
<!--end::Logo image-->
<!--begin::Sidebar toggle-->


<div id="kt_app_sidebar_toggle"
    class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
    data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
    data-kt-toggle-name="app-sidebar-minimize">
    <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Sidebar toggle-->
