@extends('template')

@section('content')

<h3>Data Karyawan</h3>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="/eas/tambah" class="btn btn-primary mb-3">+ Tambah Data Karyawan</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($newkaryawan as $k)
        <tr>
            <td>{{ $k->NIP }}</td>
            <td>{{ strtoupper($k->nama) }}</td>
            <td>{{ strtoupper($k->pangkat) }}</td>
            <td>Rp{{ number_format($k->gaji, 0, ',', '.') }}</td>
            <td>
                <a href="/eas/hapus/{{ $k->NIP }}" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
