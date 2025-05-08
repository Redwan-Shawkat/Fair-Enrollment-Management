 <!--begin::Heading-->
 {{-- <div class="d-flex flex-column bgi-no-repeat rounded-top"
     style="
 background-image: url('assets/media/misc/menu-header-bg.jpg');
">
     @include('layouts.header.navbar.notifications.partials.notiHead_design')
 </div> --}}
 <!--end::Heading-->
 <!--begin::Tab panel-->
 <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
     @include('layouts.header.navbar.notifications.partials.alerts')
 </div>
 <!--end::Tab panel-->
 <!--begin::Tab panel-->
 <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
     @include('layouts.header.navbar.notifications.partials.updates')
 </div>
 <!--end::Tab panel-->
 <!--begin::Tab panel-->
 <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
     @include('layouts.header.navbar.notifications.partials.logs')
 </div>
 <!--end::Tab panel-->
