   <!--begin::Input group-->
   <div class="row mb-5">
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="required fs-5 fw-semibold mb-2">@yield('inputLabel', 'Name')</label>
           <!--end::Label-->
           <!--begin::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="Enter the Name" name="name" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="required fs-5 fw-semibold mb-2">@yield('inputLabel', 'Address')</label>
           <!--end::Label-->
           <!--begin::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="Enter the Address"
               name="address" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="required fs-5 fw-semibold mb-2">@yield('inputLabel', 'Logo')</label>
           <!--end::Label-->
           <!--begin::Input-->
           <input type="file" class="form-control form-control-solid" placeholder="" name="logo" id="logo" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <label class="fs-5 fw-semibold mb-2">@yield('inputLabel', 'Active Status')</label>
           <!--end::Label-->
           <!--begin::Select-->
           <select name="isactive" data-control="select2" data-placeholder="Select the Status.."
               class="form-select-solid form-select">
               <option value="1" selected>Active</option>
               <option value="0">Inactive</option>
           </select>
       </div>
       <!--end::Col-->
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="sfs-5 fw-semibold mb-2">@yield('inputLabel', 'Input Field IDs')</label>
           <!--end::Label-->
           <!--begin::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="" name="input_field_ids" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
   </div>
   <!--end::Input group-->

   <!--begin::Submit-->
   <button type="submit" class="btn btn-primary" id="kt_submit_button">
       <!--begin::Indicator label-->
       <span class="indicator-label"> Add </span>
       <!--end::Indicator label-->
       <!--begin::Indicator progress-->
       <span class="indicator-progress">Please wait...
           <span class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
       <!--end::Indicator progress-->
   </button>
   <!--end::Submit-->
