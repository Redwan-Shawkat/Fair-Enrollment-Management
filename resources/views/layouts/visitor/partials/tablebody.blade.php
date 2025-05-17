    @foreach ($visitors as $visitor)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50px me-5">
                        {{-- <span class="symbol-label bg-light">
                    <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                </span> --}}
                    </div>
                    <div class="d-flex justify-content-start flex-column">
                        <a href="#" class="fw-bold text-hover-primary fs-6 mb-1 text-gray-900">
                            {{ $visitor->visitorid }}
                        </a>
                        {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                    ReactJS</span> --}}
                    </div>
                </div>
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">{{ $visitor->companyid }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Pending</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">{{ $visitor->visitorname }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">{{ $visitor->mobileno }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
            </td>
            <td>
                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">{{ $visitor->email }}</span>
            </td>
            <td>
                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">{{ $visitor->gender }}</span>
            </td>
            <td>
                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">{{ $visitor->visitorcompany }}</span>
            </td>
            <td>
                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">{{ $visitor->thoughts }}</span>
            </td>
            <td>
                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">{{ $visitor->iswinner }}</span>
            </td>
            <td>
                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">{{ $visitor->issmssend }}</span>
            </td>
            <td>
                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">{{ $visitor->drawid }}</span>
            </td>
            <td>
                <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">{{ $visitor->havetakenprize }}</span>
            </td>
            <td class="text-end">
                {{-- <a href="#"
                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm me-2 px-4">View</a> --}}
                <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
            </td>
        </tr>
    @endforeach
