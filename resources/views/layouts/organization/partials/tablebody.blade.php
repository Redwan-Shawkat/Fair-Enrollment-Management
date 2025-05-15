@foreach ($organizations as $org)
    <td>
        <div class="d-flex align-items-center">
            <div class="symbol symbol-50px me-5">
                <span class="symbol-label bg-light">
                    {{-- <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" /> --}}
                    <img src={{ $org->logo }} alt="" class="h-75 align-self-end">
                </span>
            </div>
            <div class="d-flex justify-content-start flex-column">
                <a href="#" class="fw-bold text-hover-primary fs-6 mb-1 text-gray-900">{{ $org->name }}</a>
                {{-- <span class="text-muted fw-semibold text-muted d-block fs-7"></span> --}}
            </div>
        </div>
    </td>

    <td>
        <a href="#" class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">{{ $org->address }}</a>
        {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Pending</span> --}}
    </td>
    <td>
        <a href="#" class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">{{ $org->isactive }}</a>
        {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span> --}}
    </td>
    <td>
        <a href="#" class="fw-bold text-hover-primary d-block fs-6 mb-1 text-gray-900">{{ $org->created_at }}</a>
        {{-- <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span> --}}
    </td>
    <td class="text-end">
        @include('layouts.organization.partials.tablebody_button')
    </td>
    </tr>
@endforeach
