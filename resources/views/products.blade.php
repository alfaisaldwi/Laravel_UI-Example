@extends('layout')

@section('content')
    <h1>Master Data - Produk</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
