
@extends('layouts.template')
@section('nama', 'Data Ruangan')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data Ruangan</h1>
  @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p>
    </div>
@endif
<a class="btn btn-secondary" href="http://localhost:8000/guru/create" role="button">Tambah Data</a>
  <table class="table table-striped">
    <thead class="bg-dark text-white">
      <tr>
        <th>Nama</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($ruangans as $ruangan)
      <tr>
        <td style="width: 200px" >{{ $ruangan->nama}}</td>
        <td style="width: 100px"><a class="btn btn-success"href="{{ route('ruangan.edit', $ruangan->id) }}">Edit<a></td>
        <form method="POST" action="{{ url('ruangan', $ruangan->id ) }}">
    @csrf
    @method('DELETE')
        <td style="width: 100px"><button class="btn btn-danger">Hapus</button></td>
</form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
