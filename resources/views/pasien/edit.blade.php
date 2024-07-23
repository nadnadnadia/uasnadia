@extends('layouts.app')

@section('title', 'Edit Pasien')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('pasien.index') }}">Data Pasien</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('pasien.update', $pasien->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="NIK">NIK</label>
                        <input type="text" name="NIK" class="form-control" id="NIK" value="{{ $pasien->NIK }}" required>
                        @if($errors->has('NIK'))
                            <div class="text-danger">
                                {{ $errors->first('NIK') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" Nama="nama" value="{{ $pasien->nama }}" required>
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="rincian_pendaftaran">Rincian Pendaftaran</label>
                        <input type="text" name="rincian_pendaftaran" class="form-control" id="rincian_pendaftaran" value="{{ $pasien->rincian_pendaftaran }}" required>
                        @if($errors->has('rincian_pendaftaran'))
                            <div class="text-danger">
                                {{ $errors->first('rincian_pendaftaran') }}
                            </div>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="text" name="tipe" class="form-control" id="tipe" value="{{ $pasien->tipe }}" required>
                        @if($errors->has('tipe'))
                            <div class="text-danger">
                                {{ $errors->first('tipe') }}
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
