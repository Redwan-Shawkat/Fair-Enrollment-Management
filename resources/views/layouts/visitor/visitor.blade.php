@extends('layouts.app');

@section('content')
    <h1> Visitors List </h1>
    <table border="2" class="table-responsive">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile No.</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Visitor Company</th>
                <th> Thoughts </th>
                <th> Winner </th>
                <th> Message Sent </th>
                <th> Draw ID </th>
                <th> Prize </th>
                <th> Cupon </th>
                <th> Winpos </th>
                <th> Prom Offer Id </th>
                <th> Redeem </th>
                <th> Created At </th>
                <th> Updated At </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visitors as $visitor)
                <tr>
                    <th>{{ $visitor->visitorname }}</th>
                    <th>{{ $visitor->mobileno }}</th>
                    <th>{{ $visitor->email }}</th>
                    <th>{{ $visitor->gender }}</th>
                    <th>{{ $visitor->visitorcompany }}</th>
                    <th>{{ $visitor->thoughts }}</th>
                    <th>{{ $visitor->iswinner }}</th>
                    <th>{{ $visitor->ismssend }}</th>
                    <th>{{ $visitor->drawid }}</th>
                    <th>{{ $visitor->havetakenprize }}</th>
                    <th>{{ $visitor->winpos }}</th>
                    <th>{{ $visitor->prom_offer_id }}</th>
                    <th>{{ $visitor->is_redeem }}</th>
                    <th>{{ $visitor->coupon_code }}</th>
                    <th>{{ $visitor->created_at }}</th>
                    <th>{{ $visitor->updated_at }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
