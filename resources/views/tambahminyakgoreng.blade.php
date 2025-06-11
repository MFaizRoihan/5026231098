@extends('template')

@section('content')

    <h3>Tambah Minyak Goreng</h3>

    <form action="/minyakgoreng/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="merk">Merk Minyak Goreng:</label>
            <input type="text" class="form-control" name="merk" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" name="harga" required>
        </div>

        <div class="form-group">
            <label for="tersedia">Tersedia:</label>
            <input type="number" class="form-control" name="tersedia" required>
        </div>

        <div class="form-group">
            <label for="berat">Berat (kg):</label>
            <input type="number" class="form-control" name="berat" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection
