@extends('layouts.app')

@section('title', 'Edit Pemeriksaan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('pemeriksaan.index') }}">Data Pemeriksaan</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('pemeriksaan.update', $pemeriksaan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_hasil">No Hasil</label>
                        <input type="text" name="no_hasil" class="form-control" id="no_hasil" value="{{ $pemeriksaan->no_hasil }}" required>
                        @if($errors->has('no_hasil'))
                            <div class="text-danger">
                                {{ $errors->first('no_hasil') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="NIK">NIK</label>
                        <input type="text" name="NIK" class="form-control" id="NIK" value="{{ $pemeriksaan->NIK }}" required>
                        @if($errors->has('NIK'))
                            <div class="text-danger">
                                {{ $errors->first('NIK') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal Pemeriksaan</label>
                        <input type="datetime-local" name="tanggal" class="form-control" id="tanggal" value="{{ $pemeriksaan->tanggal }}" required>
                        @if($errors->has('tanggal'))
                            <div class="text-danger">
                                {{ $errors->first('tanggal') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="hasil">Hasil Pemeriksaan</label>
                        <input type="text" name="hasil" class="form-control" id="hasil" value="{{ $pemeriksaan->hasil }}" required>
                        @if($errors->has('hasil'))
                            <div class="text-danger">
                                {{ $errors->first('hasil') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="rekomendasi">Rekomendasi</label>
                        <input type="text" name="rekomendasi" class="form-control" id="rekomendasi" value="{{ $pemeriksaan->rekomendasi }}" required>
                        @if($errors->has('rekomendasi'))
                            <div class="text-danger">
                                {{ $errors->first('rekomendasi') }}
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
