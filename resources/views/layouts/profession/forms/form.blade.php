{{-- @extends('layouts.app') --}}

{{-- @section('body')
@endsection --}}

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                @include('layouts.profession.forms.partials.details.details')
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-lg-3 gap-2">
                    <!--begin::Filter menu-->
                    @include('layouts.profession.forms.partials.actions.actions')
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    {{-- @include('layouts.visitor.forms.partials.actions.partials.create') --}}
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Visitors - Apply-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body p-lg-17">
                        <!--begin::Hero-->
                        @include('layouts.profession.forms.partials.details.partials.imgdetails')
                        <!--end::-->
                        <!--begin::Layout-->
                        <div class="d-flex flex-column flex-lg-row mb-17">
                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid me-lg-20 me-0">
                                <!--begin::Form-->
                                <form action="{{ route('profession.store') }}" class="form mb-15" method="POST"
                                    id="kt_form">
                                    @csrf
                                    @include('layouts.profession.forms.partials.input-fields.inputfield')
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Content-->

                        </div>
                        <!--end::Layout-->

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Visitors - Apply-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    <div id="kt_app_footer" class="app-footer">
        @include('layouts.profession.forms.partials.footer')
    </div>
    <!--end::Footer-->
</div>
<!--end:::Main-->
