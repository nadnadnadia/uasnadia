@extends('layouts.app')

@section('title', 'Tambah Rekam Medis Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Rekam Medis Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('rekam_medis.index') }}">Data Rekam Medis</a></li>
                <li class="active">Tambah Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Rekam Medis Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('rekam_medis.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>No Rekam Medis:</label>
                        <input type="text" name="no_rekammedis" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Riwayat Penyakit:</label>
                        <input type="text" name="riwayat" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Catatan Tambahan:</label>
                        <input type="text" name="catatan" class="form-control" required>
                    </div>
                    


                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
