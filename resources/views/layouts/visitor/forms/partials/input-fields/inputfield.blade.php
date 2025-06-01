   <!--begin::Input group-->
   <div class="row mb-5">
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="required fs-5 fw-semibold mb-2">@yield('inputLabel', 'Name')</label>
           <!--end::Label-->
           <!--begin::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="" name="visitorname" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--end::Label-->
           <label class="required fs-5 fw-semibold mb-2">@yield('inputLabel', 'Company')</label>
           <!--end::Label-->
           <!--end::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="" name="visitorcompany" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
   </div>
   <!--end::Input group-->
   {{-- BREAK --}}
   <!--begin::Input group-->
   <div class="row mb-5">
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="required fs-5 fw-semibold mb-2">@yield('inputLabel', 'Email')</label>
           <!--end::Label-->
           <!--begin::Input-->
           <input class="form-control form-control-solid" placeholder="" name="email" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--end::Label-->
           <label class="fs-5 fw-semibold mb-2">@yield('inputLabel', 'Mobile')</label>
           <!--end::Label-->
           <!--end::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="" name="mobile" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
   </div>
   <!--end::Input group-->
   {{-- BREAK --}}
   <!--begin::Input group-->
   <div class="row mb-5">
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="fs-5 fw-semibold mb-2">@yield('inputLabel', 'Gender')</label>
           <!--end::Label-->
           <!--begin::Select-->
           <select name="gender" data-control="select2" data-placeholder="Select the Gender.."
               class="form-select-solid form-select">
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Custom">Other</option>
           </select>
       </div>
       <!--end::Col-->
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--end::Label-->
           <label class="fs-5 fw-semibold mb-2">@yield('inputLabel', 'Thoughts')</label>
           <!--end::Label-->
           <!--end::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="" name="thoughts" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
   </div>
   <!--end::Input group-->

   <!--begin::Separator-->
   <div class="separator mb-8"></div>
   <!--end::Separator-->
   {{-- BREAK --}}
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
