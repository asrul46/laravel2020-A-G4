@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('gudang.update',$gudang['id']) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="nama_barang" class="col-md-4 col-form-label text-md-right">Nama Barang</label>

                            <div class="col-md-6">
                                <input id="nama_barang" value="{{$gudang['nama_barang']}}" type="text" class="form-control{{ $errors->has('nama_barang') ? ' is-invalid' : '' }}" name="nama_barang" value="{{ old('nama_barang') }}" required autofocus>

                                @if ($errors->has('nama_barang'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama_barang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="merk" class="col-md-4 col-form-label text-md-right">Merk</label>

                            <div class="col-md-6">
                                <input id="merk" value="{{$gudang['merk']}}" type="text" class="form-control{{ $errors->has('merk') ? ' is-invalid' : '' }}" name="merk" value="{{ old('merk') }}" required>

                                @if ($errors->has('merk'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('merk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="jumlah_barang" class="col-md-4 col-form-label text-md-right">Jumlah Barang</label>

                            <div class="col-md-6">
                                <input id="jumlah_barang" value="{{$gudang['jumlah_barang']}}" type="text" class="form-control{{ $errors->has('jumlah_barang') ? ' is-invalid' : '' }}" name="jumlah_barang" value="{{ old('jumlah_barang') }}" required>

                                @if ($errors->has('jumlah_barang'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('isi_silinder') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="supplier" class="col-md-4 col-form-label text-md-right">Supplier</label>

                            <div class="col-md-6">
                                <!-- <input id="supplier" value="{{$gudang['supplier']}}" type="text" class="form-control{{ $errors->has('supplier') ? ' is-invalid' : '' }}" name="supplier" value="{{ old('supplier') }}" required> -->
                                <select name="supplier_id" id="supplier_id"  class="form-control{{ $errors->has('supplier_id') ? ' is-invalid' : '' }}">
                                    <!-- <option value="{{ $gudang->supplier->id }}">
                                        {{ $gudang->supplier->nama_supplier }}
                                    </option> -->
                                    @foreach($supplier as $item)
                                        <option value="{{$item->id}}" 
                                        @if ($gudang->supplier_id == $item->id)
                                            selected
                                        @endif >
                                        {{ $item->nama_supplier }}</option>
                                    @endforeach

                                </select>
                                @if ($errors->has('supplier'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('supplier') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">Harga</label>

                            <div class="col-md-6">
                                <input id="harga" value="{{$gudang['harga']}}" type="text" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" value="{{ old('harga') }}" required>

                                @if ($errors->has('harga'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

            
                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                                <a href="{{ route('home') }}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection