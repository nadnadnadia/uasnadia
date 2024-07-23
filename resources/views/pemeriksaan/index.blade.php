@extends('layouts.app')

@section('title', 'Data Pemeriksaan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Hasil Transaksi</a></li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('pemeriksaan.create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Hasil Pemriksaan Baru</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th width = "5%" class="text-center">No</th>
            <th>No Hasil</th>
            <th>NIK</th>
            <th>Nama Dokter</th>
            <th>Tanggal Pemeriksaan</th>
            <th>Hasil Pemeriksaan</th>
            <th>Rekomendasi</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($pemeriksaan as $index => $row)
                <tr>
                          <td>{{ $row->no_hasil}}</td>
                          <td>{{ $row->NIK }}</td>
                          <td>{{ $row->nama_dokter }}</td>
                          <td>{{ $row->tanggal }}</td>
                          <td>{{ $row->hasil }}</td>
                          <td>{{ $row->rekomendasi}}</td>
                        
                  <td class="text-center">
                    <a href="{{ route('pemeriksaan.edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <!-- Tombol untuk menampilkan modal -->
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('pemeriksaan.delete', $row->id) }}">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@include('pemeriksaan.modal-delete')

@if(session('success'))
  <script>
      Swal.fire({
          icon: 'success',
          title: 'Berhasil!',
          text: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 3000
      });
  </script>
@endif

@if(session('error'))
  <script>
      Swal.fire({
          icon: 'error',
          title: 'Gagal!',
          text: '{{ session('error') }}',
          showConfirmButton: false,
          timer: 3000
      });
  </script>
@endif
@endsection


@push('script')

<script>
  $('.table').DataTable()
</script>
@endpush
