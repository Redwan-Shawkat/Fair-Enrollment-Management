    {{-- @foreach ($visitors as $visitor) --}}
    @foreach ($smssends as $index => $sms)
        <tr>

            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $index + 1 }}</a>
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $sms->smssendid }}</a>
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $sms->tovisitorid }}</a>

            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $sms->message }}</a>
            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $sms->sendtime }}</a>

            </td>
            <td>
                <a href="#"
                    class="fw-bold text-hover-primary d-block fs-6 mb-1 text-center text-gray-900">{{ $sms->smstype }}</a>

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
                {{ $smssends->links() }}
            </div>
        </td>
    </tr>
