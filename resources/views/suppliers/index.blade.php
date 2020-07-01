@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Data Supplier</div>
                <div class="row ml-2 mr-2 mt-2">
                    <div class="col-md-6">
                        <a href="{{route('suppliers.create') }}" class="btn btn-danger">Tambah Data</a>  
                    </div>
                    <div class="col-md-6">
                        <div class="float-right">
                        <form method="POST" action="{{route('suppliers.pencarian')}}">
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
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Supplier</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php  $no=1; ?>
                        @foreach ($suppliers as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->nama_supplier}}</td>
                            <td>
                                
                                <form method="POST" action="{{ route('suppliers.destroy',$item->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('suppliers.edit',$item->id) }}" class="btn btn-info btn-sm">EDIT </a>
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
                {{$suppliers->links()}}
        </div>
    </div>
</div>
@endsection
