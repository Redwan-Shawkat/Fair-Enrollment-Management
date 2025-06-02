    {{-- @foreach ($visitors as $visitor) --}}
    @foreach ($visitors as $index => $visitor)
        <tr>

            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $index + 1 }}</a>
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $visitor->visitorid }}</a>
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $visitor->companyid }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Pending</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $visitor->visitorname }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $visitor->mobileno }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
            </td>
            <td>
                <span
                    class="text-muted fw-semibold text-muted d-block fs-7 mt-1 text-center">{{ $visitor->email }}</span>
            </td>
            {{-- <td>
                <span
                    class="text-muted fw-semibold text-muted d-block fs-7 mt-1 text-center">{{ $visitor->gender }}</span>
            </td> --}}
            <td>
                <span
                    class="text-muted fw-semibold text-muted d-block fs-7 mt-1 text-center">{{ $visitor->gender_text }}</span>
            </td>
            <td>
                <span
                    class="text-muted fw-semibold text-muted d-block fs-7 mt-1 text-center">{{ $visitor->visitorcompany }}</span>
            </td>
            <td>
                <span
                    class="text-muted fw-semibold text-muted d-block fs-7 mt-1 text-center">{{ $visitor->thoughts }}</span>
            </td>
            <td>
                <span
                    class="text-muted fw-semibold text-muted d-block fs-7 mt-1 text-center">{{ $visitor->iswinner }}</span>
            </td>
            <td>
                <span
                    class="text-muted fw-semibold text-muted d-block fs-7 mt-1 text-center">{{ $visitor->issmssend }}</span>
            </td>
            <td>
                <span
                    class="text-muted fw-semibold text-muted d-block fs-7 mt-1 text-center">{{ $visitor->drawid }}</span>
            </td>
            <td>
                <span
                    class="text-muted fw-semibold text-muted d-block fs-7 mt-1 text-center">{{ $visitor->havetakenprize }}</span>
            </td>
            <td class="text-center">
                {{-- <a href="#"
                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm me-2 px-4">View</a> --}}
                <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                <a href="#"
                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Delete</a>
            </td>
        </tr>
    @endforeach

    {{-- Pagination View --}}
    <tr>
        <td colspan="13">
            <div>
                {{ $visitors->links() }}
            </div>
        </td>
    </tr>
