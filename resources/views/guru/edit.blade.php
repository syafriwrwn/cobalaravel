
@extends('layouts.app')
@section('title', 'Post Edit')
@section('content')
<div class="wrapper">
  <h1>Update data guru</h1>
  
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
  
  <form method="POST" action="{{ url('guru', $guru->id ) }}">
    @csrf
    @method('PUT')
    <input name="nip" value="{{ $guru->nip }}" type="text" placeholder="Nip..."> 
    <input name="nama" value="{{ $guru->nama }}" type="text" placeholder="Nama...">
    <input name="mapel" value="{{ $guru->mapel }}" type="text" placeholder="Mapel...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
