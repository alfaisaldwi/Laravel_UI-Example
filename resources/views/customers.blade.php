@extends('layout')

@section('content')
    <h1>Master Data - Pelanggan</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $index => $customer)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
