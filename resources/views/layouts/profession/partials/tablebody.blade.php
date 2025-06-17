    {{-- @foreach ($visitors as $visitor) --}}
    @foreach ($professions as $index => $profession)
        <tr>

            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $index + 1 }}</a>
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $profession->id }}</a>
            </td>

            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $profession->name }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $profession->active_text }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
            </td>
            <td class="text-center">
                {{-- <a href="#"
                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm me-2 px-4">View</a> --}}
                <a href="#"
                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 text-center">Edit</a>
                <a href="#"
                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 text-center">Delete</a>
            </td>
        </tr>
    @endforeach

    {{-- Pagination View --}}
    <tr>
        <td colspan="4">
            <div>
                {{ $professions->links() }}
            </div>
        </td>
    </tr>
