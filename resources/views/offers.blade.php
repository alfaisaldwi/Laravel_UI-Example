@extends('layout')

@section('content')
    <h1>Master Data - Penawaran</h1>
    <table class="data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Diskon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $index => $offer)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $offer->product->name }}</td>
                    <td>{{ $offer->discount }}%</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
