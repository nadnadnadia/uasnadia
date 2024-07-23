@extends('layouts.app')

@section('title', 'Edit Dokter')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('dokter.index') }}">Data Dokter</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('dokter.update', $dokter->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_dokter">Id Dokter</label>
                        <input type="text" name="id_dokter" class="form-control" id="id_dokter" value="{{ $dokter->id_dokter }}" required>
                        @if($errors->has('id_dokter'))
                            <div class="text-danger">
                                {{ $errors->first('id_dokter') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nama_dokter">Nama Dokter</label>
                        <input type="text" name="nama_dokter" class="form-control" Nama="nama_dokter" value="{{ $dokter->nama_dokter }}" required>
                        @if($errors->has('nama_dokter'))
                            <div class="text-danger">
                                {{ $errors->first('nama_dokter') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="spesialisasi">Spesialisasi</label>
                        <input type="text" name="spesialisasi" class="form-control" id="spesialisasi" value="{{ $dokter->spesialisasi }}" required>
                        @if($errors->has('spesialisasi'))
                            <div class="text-danger">
                                {{ $errors->first('spesialisasi') }}
                            </div>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="no_telepon">No Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" id="no_telepon" value="{{ $dokter->no_telepon }}" required>
                        @if($errors->has('no_telepon'))
                            <div class="text-danger">
                                {{ $errors->first('no_telepon') }}
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
