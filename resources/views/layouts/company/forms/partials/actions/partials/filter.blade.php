<!--begin::Menu toggle-->
<a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click"
    data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-filter fs-6 text-muted me-1">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>Filter</a>
<!--end::Menu toggle-->
<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_673c0ca74608e">
    <!--begin::Header-->
    <div class="px-7 py-5">
        <div class="fs-5 fw-bold text-gray-900">Filter Options</div>
    </div>
    <!--end::Header-->
    <!--begin::Menu separator-->
    <div class="separator border-gray-200"></div>
    <!--end::Menu separator-->
    <!--begin::Form-->
    <div class="px-7 py-5">
        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Status:</label>
            <!--end::Label-->
            <!--begin::Input-->
            <div>
                <select class="form-select-solid form-select" multiple="multiple" data-kt-select2="true"
                    data-close-on-select="false" data-placeholder="Select option"
                    data-dropdown-parent="#kt_menu_673c0ca74608e" data-allow-clear="true">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select>
            </div>
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Member Type:</label>
            <!--end::Label-->
            <!--begin::Options-->
            <div class="d-flex">
                <!--begin::Options-->
                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                    <input class="form-check-input" type="checkbox" value="1" />
                    <span class="form-check-label">Author</span>
                </label>
                <!--end::Options-->
                <!--begin::Options-->
                <label class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                    <span class="form-check-label">Customer</span>
                </label>
                <!--end::Options-->
            </div>
            <!--end::Options-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Notifications:</label>
            <!--end::Label-->
            <!--begin::Switch-->
            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                <label class="form-check-label">Enabled</label>
            </div>
            <!--end::Switch-->
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="d-flex justify-content-end">
            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                data-kt-menu-dismiss="true">Reset</button>
            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Form-->
</div>
<!--end::Menu 1-->
