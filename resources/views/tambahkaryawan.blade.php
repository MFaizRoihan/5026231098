@extends('template')

@section('content')

<h3>Tambah Data Karyawan</h3>

<form action="{{ url('/karyawan/store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="kodepegawai" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="namalengkap" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="divisi" class="col-sm-2 col-form-label">Divisi:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="divisi" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="departemen" class="col-sm-2 col-form-label">Departemen:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="departemen" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
