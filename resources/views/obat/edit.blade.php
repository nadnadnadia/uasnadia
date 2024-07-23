@extends('layouts.app')

@section('title', 'Edit Obat')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('obat.index') }}">Data Obat</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('obat.update', $obat->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_obat">Id Obat</label>
                        <input type="text" name="id_obat" class="form-control" id="id_obat" value="{{ $obat->id_obat }}" required>
                        @if($errors->has('id_obat'))
                            <div class="text-danger">
                                {{ $errors->first('id_obat') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" Nama="nama_obat" value="{{ $obat->nama_obat }}" required>
                        @if($errors->has('nama_obat'))
                            <div class="text-danger">
                                {{ $errors->first('nama_obat') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" class="form-control" id="kategori" value="{{ $obat->kategori }}" required>
                        @if($errors->has('kategori'))
                            <div class="text-danger">
                                {{ $errors->first('kategori') }}
                            </div>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" class="form-control" id="stok" value="{{ $obat->stok }}" required>
                        @if($errors->has('stok'))
                            <div class="text-danger">
                                {{ $errors->first('stok') }}
                            </div>
                        @endif
                        </div>

                    
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-dark">Reset</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
@endpush
