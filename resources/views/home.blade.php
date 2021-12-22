@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5 class="card-title">Data Guru</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text"></p>
                    <a class="btn btn-dark" href="http://127.0.0.1:8000/guru" role="button">Lihat Data</a>
                    <a class="btn btn-dark" href="http://127.0.0.1:8000/guru/create" role="button">Tambah Data</a>
                    <br><br><br>

                    <h5 class="card-title">Data Siswa</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text"></p>
                    <a class="btn btn-dark" href="http://127.0.0.1:8000/siswa" role="button">Lihat Data</a>
                    <a class="btn btn-dark" href="http://127.0.0.1:8000/siswa/create" role="button">Tambah Data</a>
                    <br><br><br>

                    <h5 class="card-title">Data kelas</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text"></p>
                    <a class="btn btn-dark" href="http://127.0.0.1:8000/kelas" role="button">Lihat Data Kelas</a>
                    <a class="btn btn-dark" href="http://127.0.0.1:8000/kelas/create" role="button">Tambah Data Kelas</a>
                    <br><br><br>

                    <h5 class="card-title">Data Ruangan</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text"></p>
                    <a class="btn btn-dark" href="http://127.0.0.1:8000/ruangan" role="button">Lihat Data ruangan</a>
                    <a class="btn btn-dark" href="http://127.0.0.1:8000/siswa/ruangan" role="button">Tambah Data Ruangan</a>
                    <br><br><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
