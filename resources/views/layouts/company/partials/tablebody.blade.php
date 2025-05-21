    @foreach ($companies as $comp)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50px me-5">
                        {{-- <span class="symbol-label bg-light">
                    <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                </span> --}}
                    </div>
                    <div class="d-flex justify-content-start flex-column w-50 mx-auto">
                        <a href="#" class="fw-bold text-hover-primary fs-6 mb-1 text-gray-900">
                            {{ $comp->id }}
                        </a>
                        {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                    ReactJS</span> --}}
                    </div>
                </div>
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $comp->name }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Pending</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $comp->address }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span> --}}
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $comp->logo }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
            </td>
            <td>
                <span
                    class="text-muted fw-semibold text-muted d-block fs-7 mt-1 text-center">{{ $comp->isactive }}</span>
            </td>
            <td>
                <span
                    class="text-muted fw-semibold text-muted d-block fs-7 mt-1 text-center">{{ $comp->input_field_ids }}</span>
            </td>
            <td class="text-center">
                {{-- <a href="#"
                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm me-2 px-4">View</a> --}}
                <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
            </td>
        </tr>
        </tr>
    @endforeach
