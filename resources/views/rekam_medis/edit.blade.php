@extends('layouts.app')

@section('title', 'Edit Rekam Medis')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('rekam_medis.index') }}">Data Rekam Medis</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('rekam_medis.update', $rekam_medis->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_rekammedis">No Rekam Medis</label>
                        <input type="text" name="no_rekammedis" class="form-control" id="no_rekammedis" value="{{ $rekam_medis->no_rekammedis }}" required>
                        @if($errors->has('no_rekammedis'))
                            <div class="text-danger">
                                {{ $errors->first('no_rekammedis') }}
                            </div>
                        @endif
                        </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" Nama="nama" value="{{ $rekam_medis->nama }}" required>
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="riwayat">Riwayat</label>
                        <input type="text" name="riwayat" class="form-control" id="riwayat" value="{{ $rekam_medis->riwayat}}" required>
                        @if($errors->has('riwayat'))
                            <div class="text-danger">
                                {{ $errors->first('riwayat') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="catatan">Catatan</label>
                        <input type="text" name="catatan" class="form-control" id="catatan" value="{{ $rekam_medis->catatan }}" required>
                        @if($errors->has('catatan'))
                            <div class="text-danger">
                                {{ $errors->first('catatan') }}
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
