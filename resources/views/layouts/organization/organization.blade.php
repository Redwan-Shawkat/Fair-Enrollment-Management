@extends('layouts.app')
@section('content')
    {{-- ('title', 'Organization'); --}}

    <h1>Organization List</h1>

    {{-- Organizations' List --}}
    <table border="2">
        <thead>
            <tr>
                <th> Name </th>
                <th> Address </th>
                <th> Logo </th>
                <th> Active </th>
                <th> Input Field ID </th>
                <th> Created At </th>
                <th> Updated At </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($organizations as $org)
                <tr>
                    <td> {{ $org->name }} </td>
                    <td> {{ $org->address }} </td>
                    <td> {{ $org->logo }} </td>
                    <td> {{ $org->isActive }} </td>
                    <td> {{ $org->input_field_ids }} </td>
                    <td> {{ $org->created_at }} </td>
                    <td> {{ $org->updated_at }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Add New One --}}
@endsection
