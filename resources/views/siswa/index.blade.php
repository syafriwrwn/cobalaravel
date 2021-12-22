
@extends('layouts.template')
@section('title', 'Data siswa')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data siswa</h1>
  @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p>
    </div>
@endif
<a class="btn btn-secondary" href="http://localhost:8000/guru/create" role="button">Tambah Data</a>
<table class="table table-striped">
  <thead class="bg-dark text-white">
      <tr>
        <th>Nama Siswa</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($siswas as $siswa)
      <tr>
        <td style="width: 200px" >{{ $siswa->nama}}</td>
        <td style="width: 100px"><a class="btn btn-success" href="{{ route('siswa.edit', $siswa->id) }}">Edit<a></td>
        <form method="POST" action="{{ url('siswa', $siswa->id ) }}">
    @csrf
    @method('DELETE')
        <td style="width: 100px"><button class="btn btn-danger">Hapus</button></td></form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
