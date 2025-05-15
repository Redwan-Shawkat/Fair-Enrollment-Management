@extends('layouts.app')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
        @include('layouts.organization.partials.tableinfo')
    </div>
    <!--end::Toolbar-->
    <div class="card mb-xl-8 mb-5">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Member Statistics</span>
                <span class="text-muted fw-semibold fs-7 mt-1">Over 500 new members</span>
            </h3>
            <div class="card-toolbar">
                {{-- @include('layouts.organization.partials.tabletop_qactions') --}}
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="gs-0 gy-4 table align-middle">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="min-w-300px rounded-start ps-4">Agent</th>
                            <th class="min-w-125px">Earnings</th>
                            <th class="min-w-125px">Comission</th>
                            <th class="min-w-200px">Company</th>
                            <th class="min-w-150px">Rating</th>
                            <th class="min-w-200px rounded-end text-end"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light">
                                            <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end"
                                                alt="" />
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="fw-bold text-hover-primary fs-6 mb-1 text-gray-900">Brad
                                            Simmons</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                            ReactJS</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">$8,000,000</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Pending</span>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">$5,400</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">Intertico</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span>
                            </td>
                            <td>
                                <div class="rating">
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                </div>
                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Best Rated</span>
                            </td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm me-2 px-4">View</a>
                                <a href="#"
                                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light">
                                            <img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end"
                                                alt="" />
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="fw-bold text-hover-primary fs-6 mb-1 text-gray-900">Lebron
                                            Wayde</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">PHP, Laravel,
                                            VueJS</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">$8,750,000</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">$7,400</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">Agoda</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Houses & Hotels</span>
                            </td>
                            <td>
                                <div class="rating">
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                </div>
                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Above Avarage</span>
                            </td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm me-2 px-4">View</a>
                                <a href="#"
                                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light">
                                            <img src="assets/media/svg/avatars/006-girl-3.svg" class="h-75 align-self-end"
                                                alt="" />
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="fw-bold text-hover-primary fs-6 mb-1 text-gray-900">Brad
                                            Simmons</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                            ReactJS</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">$8,000,000</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">In Proccess</span>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">$2,500</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Rejected</span>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">RoadGee</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <div class="rating">
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                </div>
                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Best Rated</span>
                            </td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm me-2 px-4">View</a>
                                <a href="#"
                                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light">
                                            <img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end"
                                                alt="" />
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="fw-bold text-hover-primary fs-6 mb-1 text-gray-900">Natali Trump</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                            ReactJS</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">$700,000</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Pending</span>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">$7,760</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <a href="#" class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">The
                                    Hill</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                            </td>
                            <td>
                                <div class="rating">
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                </div>
                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Avarage</span>
                            </td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm me-2 px-4">View</a>
                                <a href="#"
                                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label bg-light">
                                            <img src="assets/media/svg/avatars/020-girl-11.svg"
                                                class="h-75 align-self-end" alt="" />
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="fw-bold text-hover-primary fs-6 mb-1 text-gray-900">Jessie
                                            Clarcson</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                            ReactJS</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">$1,320,000</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Pending</span>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">$6,250</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <a href="#"
                                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">Intertico</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span>
                            </td>
                            <td>
                                <div class="rating">
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                </div>
                                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Best Rated</span>
                            </td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm me-2 px-4">View</a>
                                <a href="#"
                                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
@endsection
