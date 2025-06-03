    {{-- @foreach ($visitors as $visitor) --}}
    @foreach ($products as $index => $product)
        <tr>

            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $index + 1 }}</a>
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $product->id }}</a>
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $product->companyid }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Pending</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $product->name }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $product->active_text }}</a>
            </td>
            <td class="text-center">
                {{-- <a href="#"
                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm me-2 px-4">View</a> --}}
                <a href="#"
                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 text-center">Edit</a>
                <a href="#"
                    class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Delete</a>
            </td>
        </tr>
    @endforeach

    {{-- Pagination View --}}
    <tr>
        <td colspan="13">
            <div>
                {{ $products->links() }}
            </div>
        </td>
    </tr>
