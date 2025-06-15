@extends('template')

@section('content')

<h3>Data Karyawan</h3>

<!-- Form Pencarian -->
<form action="{{ url('/karyawan/cari') }}" method="GET" class="mt-3">
    <label class="form-label"><strong>Cari Data Karyawan:</strong></label>
    <div class="d-flex">
        <input
            type="text"
            name="cari"
            value="{{ $cari ?? '' }}"
            placeholder="Cari Karyawan..."
            class="form-control mr-2"
            style="width: 300px;"
        >
        <input type="submit" value="CARI" class="btn btn-primary">
    </div>
</form>
<br/>

<!-- Tabel untuk menampilkan data karyawan -->
<table class="table table-striped">
    <thead>
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($karyawan as $data)
            <tr>
                <td>{{ $data->kodepegawai }}</td>
                <td>{{ strtoupper($data->namalengkap) }}</td>
                <td>{{ $data->divisi }}</td>
                <td>{{ strtolower($data->departemen) }}</td>
                <td>
                    <a
                      href="{{ url('/karyawan/delete/'.$data->kodepegawai) }}"
                      class="btn btn-danger"
                      onclick="return confirm('Yakin ingin menghapus {{ $data->namalengkap }}?')"
                    >Hapus</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center text-muted">
                    Data <strong>{{ $cari }}</strong> tidak ditemukan.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-between align-items-center mt-3">
    <!-- Tombol Tambah Data -->
    <a href="{{ url('/karyawan/tambah') }}" class="btn btn-info">+ Tambah Data</a>
    <!-- Pagination (akan mempertahankan ?cari=...) -->
    {{ $karyawan->links() }}
</div>

@endsection
