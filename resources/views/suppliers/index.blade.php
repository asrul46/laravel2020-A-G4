@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Data Supplier</div>
                <div> <a href="{{route('suppliers.create') }}" class="btn btn-danger">Tambah Data</a>
                </div>
                <form method="POST" action="{{route('suppliers.pencarian')}}">
                    @csrf
                <div class="card">
                <div class="card-header">Pencarian</div>
                    <input type="text" name="cari" class="form-control">
                </div>
                <button type="submit" class="btn btn-info">Cari</button>
                </form>
                <div class="card-body">
                        <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Supplier</th>
                            <th>Aksi</th>

                        </tr>
                        <?php  $no=1; ?>
                        @foreach ($suppliers as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->nama_supplier}}</td>
                            <td>
                                <a href="{{ route('suppliers.edit',$item->id) }}" class="btn btn-info btn-sm">EDIT </a>
                                <form method="POST" action="{{ route('suppliers.destroy',$item->id) }}">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-danger btn-sm">DELETE </button>
                                </form>

                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach

                      
                        </table>
                </div>
            </div>
                {{$suppliers->links()}}
        </div>
    </div>
</div>
@endsection
