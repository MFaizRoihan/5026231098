@extends('template')

@section('content')

<h3>Tambah Data Karyawan</h3>

<a href="/eas" class="btn btn-info mb-3">Kembali</a>

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form action="/eas/store" method="POST">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-10">
            <input type="text" name="NIP" class="form-control" maxlength="9" required>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" required>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pangkat</label>
        <div class="col-sm-10">
            <input type="text" name="pangkat" class="form-control" required>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Gaji</label>
        <div class="col-sm-10">
            <input type="number" name="gaji" class="form-control" required>
        </div>
    </div>

    <div class="form-group row mt-3">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-success">Simpan Data</button>
        </div>
    </div>
</form>

@endsection
