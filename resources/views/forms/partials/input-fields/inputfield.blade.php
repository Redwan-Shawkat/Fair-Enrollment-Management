   <!--begin::Input group-->
   <div class="row mb-5">
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="required fs-5 fw-semibold mb-2">@yield('inputLabel', 'Name')</label>
           <!--end::Label-->
           <!--begin::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="" name="name" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--end::Label-->
           <label class="required fs-5 fw-semibold mb-2">@yield('inputLabel', 'Company')</label>
           <!--end::Label-->
           <!--end::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="" name="company" />
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
               <option value="Custom">Custom</option>
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
   {{-- BREAK --}}
   <!--begin::Input group-->
   {{-- <div class="d-flex flex-column fv-row mb-5">
       <!--begin::Label-->
       <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
           <span class="required">Position</span>
           <span class="ms-1" data-bs-toggle="tooltip"
               title="Your payment statements may very based on selected position">
               <i class="ki-duotone ki-information fs-7">
                   <span class="path1"></span>
                   <span class="path2"></span>
                   <span class="path3"></span>
               </i>
           </span>
       </label>
       <!--end::Label-->
       <!--begin::Select-->
       <select name="position" data-control="select2" data-placeholder="Select a position..."
           class="form-select-solid form-select">
           <option value="Web Developer">Web Developer</option>
           <option value="Web Designer">Web Designer</option>
           <option value="Art Director">Art Director</option>
           <option value="Finance Manager">Finance Manager</option>
           <option value="Project Manager">Project Manager</option>
           <option value="System Administrator">System Administrator</option>
       </select>
       <!--end::Select-->
   </div> --}}
   <!--end::Input group-->
   {{-- BREAK --}}
   <!--begin::Input group-->
   {{-- <div class="row mb-5">
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--begin::Label-->
           <label class="required fs-5 fw-semibold mb-2">Expected Salary</label>
           <!--end::Label-->
           <!--begin::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="" name="salary" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
       <!--begin::Col-->
       <div class="col-md-6 fv-row">
           <!--end::Label-->
           <label class="required fs-5 fw-semibold mb-2">Srart Date</label>
           <!--end::Label-->
           <!--end::Input-->
           <input type="text" class="form-control form-control-solid" placeholder="" name="start_date" />
           <!--end::Input-->
       </div>
       <!--end::Col-->
   </div> --}}
   <!--end::Input group-->
   {{-- BREAK --}}
   <!--begin::Input group-->
   {{-- <div class="d-flex flex-column fv-row mb-5">
       <!--begin::Label-->
       <label class="fs-5 fw-semibold mb-2">Website (If Any)</label>
       <!--end::Label-->
       <!--begin::Input-->
       <input class="form-control form-control-solid" placeholder="" name="website" />
       <!--end::Input-->
   </div> --}}
   <!--end::Input group-->
   {{-- BREAK --}}
   <!--begin::Input group-->
   {{-- <div class="d-flex flex-column mb-5">
       <label class="fs-6 fw-semibold mb-2">Experience (Optional)</label>
       <textarea class="form-control form-control-solid" rows="2" name="experience" placeholder=""></textarea>
   </div> --}}
   <!--end::Input group-->
   {{-- BREAK --}}
   <!--begin::Input group-->
   {{-- <div class="d-flex flex-column mb-8">
       <label class="fs-6 fw-semibold mb-2">Application</label>
       <textarea class="form-control form-control-solid" rows="4" name="application" placeholder=""></textarea>
   </div> --}}
   <!--end::Input group-->
   {{-- BREAK --}}
   <!--begin::Separator-->
   <div class="separator mb-8"></div>
   <!--end::Separator-->
   {{-- BREAK --}}
   <!--begin::Submit-->
   <button type="submit" class="btn btn-primary" id="kt_submit_button">
       <!--begin::Indicator label-->
       <span class="indicator-label">Apply Now</span>
       <!--end::Indicator label-->
       <!--begin::Indicator progress-->
       <span class="indicator-progress">Please wait...
           <span class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
       <!--end::Indicator progress-->
   </button>
   <!--end::Submit-->
