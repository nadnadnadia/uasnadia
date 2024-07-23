@extends('layouts.app')

@section('title', 'Tambah Pemeriksaan Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Hasil Pemeriksaan Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('pemeriksaan.index') }}">Data Pemeriksaan</a></li>
                <li class="active">Tambah Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Hasil Pmeriksaan Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('pemeriksaan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>No Hasil:</label>
                        <input type="text" name="no_hasil" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>NIK:</label>
                        <input type="text" name="NIK" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Tanggal Pemeriksaan:</label>
                        <input type="datetime-local" name="tanggal" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Hasil:</label>
                        <input type="text" name="hasil" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Rekomendasi:</label>
                        <input type="text" name="rekomendasi" class="form-control">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
