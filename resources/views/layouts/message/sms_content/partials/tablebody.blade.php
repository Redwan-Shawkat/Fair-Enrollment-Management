@foreach ($smscontents as $index => $smscontent)
    <tr>

        <td>
            <a href="#"
                class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $index + 1 }}</a>
        </td>
        <td>
            <a href="#"
                class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $smscontent->sms_content_id }}</a>
        </td>
        <td>
            <a href="#"
                class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $smscontent->prom_offer_id }}</a>

        </td>
        <td>
            <a href="#"
                class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $smscontent->sms_content }}</a>
        </td>
        <td class="text-center">
            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
        </td>
    </tr>
@endforeach

{{-- Pagination View --}}
<tr>
    <td colspan="4">
        <div>
            {{ $smscontents->links() }}
        </div>
    </td>
</tr>
