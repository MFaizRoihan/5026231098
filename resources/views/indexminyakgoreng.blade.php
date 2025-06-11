@extends('template')

@section('content')

    <h3>Data Minyak Goreng</h3>

    <a href="/minyakgoreng/tambah" class="btn btn-info"> + Tambah Minyak Goreng Baru</a>

    <form action="/minyakgoreng/cari" method="GET" class="form-inline">
        <label class="form-label"><strong>Cari Data Minyak Goreng :</strong></label>
        <input type="text" name="cari" placeholder="Cari Minyak Goreng .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>Merk Minyak Goreng</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat (kg)</th>
            <th>Opsi</th>
        </tr>

        @foreach ($minyakgoreng as $m)
            <tr>
                <td>{{ $m->merkminyakgoreng }}</td>
                <td>{{ $m->hargaminyakgoreng }}</td>
                <td>{{ $m->tersedia }}</td>
                <td>{{ $m->berat }}</td>
                <td>
                    <a href="/minyakgoreng/edit/{{ $m->ID }}" class="btn btn-success">Edit</a>
                    <a href="/minyakgoreng/hapus/{{ $m->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $minyakgoreng->links() }} <!-- Untuk pagination -->
@endsection
