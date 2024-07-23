@extends('layouts.app')

@section('title', 'Data Jadwal Konsultasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Jadwal Konsultasi</a></li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('jadwal_konsultasi.create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Jadwal Konsultasi Baru</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th width = "5%" class="text-center">No</th>
            <th>No Jadwal</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jam</th>
            <th>Hari</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($jadwal_konsultasi as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                          <td>{{ $row->no_jadwal }}</td>
                          <td>{{ $row->NIK }}</td>
                          <td>{{ $row->nama }}</td>
                          <td>{{ $row->jam }}</td>
                          <td>{{ $row->hari }}</td>
                        
                  <td class="text-center">
                    <a href="{{ route('jadwal_konsultasi.edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <!-- Tombol untuk menampilkan modal -->
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('jadwal_konsultasi.delete', $row->id) }}">
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

@include('jadwal_konsultasi.modal-delete')

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
