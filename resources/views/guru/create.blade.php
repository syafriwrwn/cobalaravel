
@extends('layouts.template')
@section('title', 'Data Guru')
@section('content')
<div class="wrapper">
  <h1></h1>

  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif

  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="card w-50">
      <div class="card-header bg-dark text-light">
          <h5>Tambah Data Guru</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ url('guru') }}">
            @csrf
            <div class="form-group">
              <label>NIP</label><br>
            <input class="form-control" name="nip" type="text" placeholder><br>
            <label>Nama Guru </label><br>
            <input class="form-control" name="nama" type="text" placeholder><br>
            <label>Mata Pelajaran </label><br>
            <input class="form-control" name="mapel" type="text" placeholder><br>
             </div>
      </div>
      <div class="card-footer bg-secondary">
         <div class="d-flex justify-content-end d-grid gap-3">
          <input class='btn btn-dark' type='submit' value='Submit'>
          <a class='btn btn-dark' href='http://localhost:8000/guru' role='button'>Kembali</a>
         </div>
        </div>
        </form>
      </div>
  </div>
@endsection
