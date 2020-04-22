@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Data Gudang Sembako</div>
                <div class="row ml-2 mr-2 mt-2">
                    <div class="col-md-6">
                        <a href="{{route('gudang.create') }}" class="btn btn-danger">Tambah Data</a>  
                    </div>
                    <div class="col-md-6">
                        <div class="float-right">
                        <form method="POST" action="{{route('gudang.pencarian')}}">
                            @csrf
                            <table>
                                <tr>
                                    <td><input type="text" name="cari" class="form-control"></td>
                                    <td><button type="submit" class="btn btn-info">Cari</button></td>
                                </tr>
                            </table>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                        <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Merk</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php  $no=1; ?>
                            @foreach ($gudang as $item)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$item->nama_barang}}</td>
                                <td>{{$item->merk}}</td>
                                <td>
                                    <form method="POST" action="{{ route('gudang.destroy',$item->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('gudang.show',$item->id) }}" class="btn btn-light btn-sm">Detail </a>
                                    <a href="{{ route('gudang.edit',$item->id) }}" class="btn btn-info btn-sm">EDIT </a>
                                    <button type="submit" class="btn btn-danger btn-sm">DELETE </button>
                                    </form>

                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>

                      
                        </table>
                </div>
            </div>
                {{$gudang->links()}}
        </div>
    </div>
</div>
@endsection
