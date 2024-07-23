@extends('layouts.app')

@section('title', 'Tambah Obat Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Obat Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('obat.index') }}">Data Obat</a></li>
                <li class="active">Tambah Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Obat Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('obat.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Id Obat:</label>
                        <input type="text" name="id_obat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Obat:</label>
                        <input type="text" name="nama_obat" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Kategori:</label>
                        <input type="text" name="kategori" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label>Stok:</label>
                        <input type="text" name="stok" class="form-control" required>
                    </div>


                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
