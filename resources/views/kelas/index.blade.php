
@extends('layouts.template')
@section('nama', 'Data kelas')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data kelas</h1>
  @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p>
    </div>
@endif
<a class="btn btn-secondary" href="http://localhost:8000/guru/create" role="button">Tambah Data</a>
  <table class="table table-striped">
    <thead class="bg-dark text-white">
      <tr>
        <th>Nama Kelas</th>
        <th colspan="3">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kelas as $kel)
      <tr>
        <td style="width: 200px" >{{ $kel->nama}}</td>
        <td style="width: 100px"><a class="btn btn-success" href="{{ route('kelas.edit', $kel->id) }}">Edit</a></td>
        <form method="POST" action="{{ url('kelas', $kel->id ) }}">
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
