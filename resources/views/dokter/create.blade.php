@extends('layouts.app')

@section('title', 'Tambah Dokter Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Dokter Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('dokter.index') }}">Data Dokter</a></li>
                <li class="active">Tambah Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Dokter Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('dokter.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Id dokter:</label>
                        <input type="text" name="id_dokter" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama dokter:</label>
                        <input type="text" name="nama_dokter" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Spesialisasi:</label>
                        <input type="text" name="spesialisasi" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label>Nomor Telepon:</label>
                        <input type="text" name="no_telepon" class="form-control" required>
                    </div>


                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
