<!--begin::Search-->
<div class="app-navbar-item align-items-stretch ms-md-4 ms-1">
    {{-- @include('layouts.header.navbar.search.search') --}}
</div>
<!--end::Search-->
<!--begin::Activities-->
<div class="app-navbar-item ms-md-4 ms-1">
    {{-- @include('layouts.header.navbar.activities.activities') --}}
</div>
<!--end::Activities-->
<!--begin::Notifications-->
{{-- <div class="app-navbar-item ms-md-4 ms-1">
    <!--begin::Menu- wrapper-->
    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
        <i class="ki-duotone ki-notification-status fs-2">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
            <span class="path4"></span>
        </i>
    </div>
    <!--begin::Menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true"
        id="kt_menu_notifications">
        <!--begin::Heading-->
        @include('layouts.header.navbar.notifications.partials.notiHead_design')
        <!--end::Heading-->
        <!--begin::Tab content-->
        <div class="tab-content">
            @include('layouts.header.navbar.notifications.notifications')
        </div>
        <!--end::Tab content-->
    </div>
    <!--end::Menu-->
    <!--end::Menu wrapper-->
</div> --}}
<!--end::Notifications-->
<!--begin::Chat-->
<div class="app-navbar-item ms-md-4 ms-1">
    {{-- @include('layouts.header.navbar.chatapp') --}}
</div>
<!--end::Chat-->
<!--begin::My apps links-->
<div class="app-navbar-item ms-md-4 ms-1">
    {{-- @include('layouts.header.navbar.myapps') --}}
</div>
<!--end::My apps links-->
<!--begin::Theme mode-->
<div class="app-navbar-item ms-md-4 ms-1">
    @include('layouts.header.navbar.theme-mode.thememode')
</div>
<!--end::Theme mode-->
<!--begin::User menu-->
<div class="app-navbar-item ms-md-4 ms-1" id="kt_header_user_menu_toggle">
    @include('layouts.header.user')
</div>
<!--end::User menu-->
<!--begin::Header menu toggle-->
<div class="app-navbar-item d-lg-none me-n2 ms-2" title="Show header menu">
    @include('layouts.header.navbar.header-toggle.headertoggle')
</div>
<!--end::Header menu toggle-->
<!--begin::Aside toggle-->
<!--end::Header menu toggle-->
