@extends('layouts.app')

@section('title', 'Edit Jadwal Konsultasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('jadwal_konsultasi.index') }}">Data Jadwal Konsultasi</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('jadwal_konsultasi.update', $jadwal_konsultasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_jadwal">No Jadwal</label>
                        <input type="text" name="no_jadwal" class="form-control" no_jadwal="no_jadwal" value="{{ $jadwal_konsultasi->no_jadwal }}" required>
                        @if($errors->has('no_jadwal'))
                            <div class="text-danger">
                                {{ $errors->first('no_jadwal') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="NIK">NIK</label>
                        <input type="text" name="NIK" class="form-control" id="NIK" value="{{ $jadwal_konsultasi->NIK }}" required>
                        @if($errors->has('NIK'))
                            <div class="text-danger">
                                {{ $errors->first('NIK') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" Nama="nama" value="{{ $jadwal_konsultasi->nama }}" required>
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="text" name="jam" class="form-control" jam="jam" value="{{ $jadwal_konsultasi->jam }}" required>
                        @if($errors->has('jam'))
                            <div class="text-danger">
                                {{ $errors->first('jam') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <input type="text" name="hari" class="form-control" hari="hari" value="{{ $jadwal_konsultasi->hari }}" required>
                        @if($errors->has('hari'))
                            <div class="text-danger">
                                {{ $errors->first('hari') }}
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
