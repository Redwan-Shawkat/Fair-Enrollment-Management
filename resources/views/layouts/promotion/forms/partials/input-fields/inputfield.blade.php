   <!--begin::Input group-->
   <div class="row mb-5">
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="required fs-5 fw-semibold mb-2">@yield('inputLabel', 'Promotional Offer Name')</label>
           <!--end::Label-->
           <!--begin::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="Enter the Name of offer"
               name="prom_offer_name" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="required fs-5 fw-semibold mb-2">@yield('inputLabel', 'Logo')</label>
           <!--end::Label-->
           <!--begin::Input-->
           <input type="file" class="form-control form-control-solid" placeholder="" name="logo" />
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
           <label class="sfs-5 fw-semibold mb-2">@yield('inputLabel', 'Validate From')</label>
           <!--end::Label-->
           <!--begin::Input-->
           <div class="col-lg-4 col-md-9 col-sm-12">
               <input type="date" class="form-control" name="validate_from" required>
           </div>
           <!--end::Input-->
       </div>
       <!--end::Col-->
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="sfs-5 fw-semibold mb-2">@yield('inputLabel', 'Validate To')</label>
           <!--end::Label-->
           <!--begin::Input-->
           <div class="col-lg-4 col-md-9 col-sm-12">
               <input type="date" class="form-control" name="validate_to" required>
           </div>
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
