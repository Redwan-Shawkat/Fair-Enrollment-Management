                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-fluid">
                        <!--begin::Row-->
                        <div class="row g-5 gx-xl-10 mb-xl-10 mb-5">
                            @include('layouts.dashboard.dashboard_topBody.project_details')
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row gx-5 gx-xl-10">
                            @include('layouts.dashboard.dashboard_topBody.performance_overview')
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
                            <!--begin::Col-->
                            <div class="col-xxl-6">
                                @include('layouts.dashboard.dashboard_topBody.in_process')
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                @include('layouts.dashboard.dashboard_topBody.performance')
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-10 mb-xl-10 mb-5">
                            <!--begin::Col-->
                            <div class="col-xl-4">
                                @include('layouts.dashboard.dashboard_topBody.agent_state')
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-8">
                                @include('layouts.dashboard.dashboard_topBody.project_state')
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row gx-5 gx-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-4 mb-xl-0 mb-5">
                                @include('layouts.dashboard.dashboard_topBody.warephase_state')
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-8">
                                @include('layouts.dashboard.dashboard_topBody.human_resource')
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Content container-->
