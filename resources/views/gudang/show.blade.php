@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
        <div class="card-body">
            <table style="width: 400px">
                <tr>
                    <td>Nama Produk</td>
                    <td> : </td>
                    <td>{{ $gudang->nama_barang }}</td>
                </tr>
                <tr>
                    <td>Merk</td>
                    <td> : </td>
                    <td>{{ $gudang->merk }}</td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td> : </td>
                    <td>{{ $gudang->jumlah_barang }}</td>
                </tr>
                <tr>
                    <td>Supplier</td>
                    <td> : </td>
                    <td>{{ $gudang->supplier->nama_supplier }}</td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td> : </td>
                    <td>{{ $gudang->harga }}</td>
                </tr>
            </table>

            <a href="{{ url('/home') }}" class="btn btn-danger btn-sm float-right">Kembali</a>
        </div>
    </div>
</div>

@endsection