@extends('template')

@section('content')

<h3>Data Karyawan</h3>

<!-- Form Pencarian -->
<form action="{{ url('/karyawan/cari') }}" method="GET" class="mt-3">
    <label class="form-label"><strong>Cari Data Karyawan:</strong></label>
    <div class="d-flex">
        <input type="text" name="cari" placeholder="Cari Karyawan..." class="form-control mr-2" style="width: 300px;">
        <input type="submit" value="CARI" class="btn btn-primary">
    </div>
</form>
<br />


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
        @foreach ($karyawan as $data)
        <tr>
            <td>{{ $data->kodepegawai }}</td>
            <td>{{ strtoupper($data->namalengkap) }}</td> <!-- Nama Lengkap dalam huruf kapital -->
            <td>{{ $data->divisi }}</td>
            <td>{{ strtolower($data->departemen) }}</td> <!-- Departemen dalam huruf kecil -->
            <td>
                <!-- Tombol untuk menghapus data -->
                <a href="{{ url('/karyawan/delete/'.$data->kodepegawai) }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Tombol Tambah Data yang dipindahkan ke bawah dengan jarak -->
<div class="mt-3">
    <a href="{{ url('/karyawan/tambah') }}" class="btn btn-info">+ Tambah Data</a>
</div>

<!-- Pagination dengan jarak atas -->
<div class="mt-4">
    {{ $karyawan->links() }} <!-- Untuk pagination -->
</div>

@endsection
