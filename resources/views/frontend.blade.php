@extends('template')

@section('content')

<!-- Page Header -->
<header class="bg-dark text-white py-5 mb-4">
    <div class="text-center">
        <h1 class="display-4 font-weight-bold">Portofolio Pemrograman Web</h1>
        <p class="lead">Tugas Week 1 - 11</p>
    </div>
</header>

<!-- Projects Section -->
<section class="py-5 bg-dark">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pertama</h5>
                        <p class="card-text text-muted">Blog ITS</p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center">
                        <a href="{{ url('pertemuan1') }}" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tugas Video</h5>
                        <p class="card-text text-muted">CSS Media Query dan CSS Overflow</p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center">
                        <a href="https://www.youtube.com/playlist?list=PLrRBIBR5elDaTPTZgC_EOALowIdeJvuoB" target="_blank" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bootstrap</h5>
                        <p class="card-text text-muted">Latihan Bootstrap</p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center">
                        <a href="{{ url('pertemuan3') }}" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tugas Linktree</h5>
                        <p class="card-text text-muted">Membuat copy design Linktree</p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center">
                        <a href="{{ url('clonelinktree') }}" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tugas Javascript 1</h5>
                        <p class="card-text text-muted">Latihan Javascript 1</p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center">
                        <a href="{{ url('pertemuan7-js1') }}" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tugas Javascript 2</h5>
                        <p class="card-text text-muted">Latihan Javascript 2</p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center">
                        <a href="{{ url('pertemuan7-js2') }}" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tugas Danantara</h5>
                        <p class="card-text text-muted">Danantara</p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center">
                        <a href="{{ url('danantara') }}" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">ETS</h5>
                        <p class="card-text text-muted">Remake Website Dirgantara</p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center">
                        <a href="{{ url('ets') }}" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
