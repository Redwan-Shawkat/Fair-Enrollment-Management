    {{-- @foreach ($visitors as $visitor) --}}
    @foreach ($promotions as $index => $prom)
        <tr>

            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $index + 1 }}</a>
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $prom->prom_offer_id }}</a>
            </td>

            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $prom->prom_offer_name }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $prom->validate_from }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $prom->validate_to }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $prom->is_active }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $prom->logo }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
            </td>
            <td class="text-center">
                {{-- <a href="#"
                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm me-2 px-4">View</a> --}}
                <a href="#"
                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 text-center">Edit</a>
            </td>
        </tr>
    @endforeach

    {{-- Pagination View --}}
    <tr>
        <td colspan="9">
            <div>
                {{ $promotions->links() }}
            </div>
        </td>
    </tr>
