@extends('layouts.app')

@section('title', 'Data Pasien')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Pasien</a></li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('pasien.create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Pasien Baru</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th width = "5%" class="text-center">No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Rincian Pendaftaran</th>
            <th>Tipe</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($pasien as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                          <td>{{ $row->NIK }}</td>
                          <td>{{ $row->nama }}</td>
                          <td>{{ $row->rincian_pendaftaran }}</td>
                          <td>{{ $row->tipe }}</td>
                        
                  <td class="text-center">
                    <a href="{{ route('pasien.edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <!-- Tombol untuk menampilkan modal -->
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('pasien.delete', $row->id) }}">
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

@include('pasien.modal-delete')

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
