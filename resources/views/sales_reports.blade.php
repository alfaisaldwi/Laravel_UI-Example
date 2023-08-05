@extends('layout')

@section('content')
    <h1>Laporan Penjualan</h1>
    <table class="data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salesReports as $index => $salesReport)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $salesReport->customer->name }}</td>
                    <td>{{ $salesReport->product->name }}</td>
                    <td>{{ $salesReport->quantity }}</td>
                    <td>{{ $salesReport->total_amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
