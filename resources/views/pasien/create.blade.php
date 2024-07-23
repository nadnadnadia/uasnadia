@extends('layouts.app')

@section('title', 'Tambah Pasien Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Pasien Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('pasien.index') }}">Data Pasien</a></li>
                <li class="active">Tambah Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Pasien Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('pasien.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>NIK:</label>
                        <input type="text" name="NIK" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Rincian Pendaftaran:</label>
                        <input type="text" name="rincian_pendaftaran" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label>Tipe:</label>
                        <input type="text" name="tipe" class="form-control" required>
                    </div>


                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
