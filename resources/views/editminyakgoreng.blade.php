@extends('template')

@section('content')

    <h3>Edit Minyak Goreng</h3>

    <form action="/minyakgoreng/update" method="POST">
        @csrf
        <!-- Mengirim ID sebagai data tersembunyi -->
        <input type="hidden" name="id" value="{{ $minyakgoreng->ID }}">

        <div class="form-group">
            <label for="merk">Merk Minyak Goreng:</label>
            <input type="text" class="form-control" name="merk" value="{{ $minyakgoreng->merkminyakgoreng }}" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" name="harga" value="{{ $minyakgoreng->hargaminyakgoreng }}" required>
        </div>

        <div class="form-group">
            <label for="tersedia">Tersedia:</label>
            <input type="number" class="form-control" name="tersedia" value="{{ $minyakgoreng->tersedia }}" required>
        </div>

        <div class="form-group">
            <label for="berat">Berat (kg):</label>
            <input type="number" class="form-control" name="berat" value="{{ $minyakgoreng->berat }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection
