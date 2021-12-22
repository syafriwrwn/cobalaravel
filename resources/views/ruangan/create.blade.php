
@extends('layouts.app')
@section('ruangan', 'Data ruangan')
@section('content')
<div class="wrapper">
  <h1>Buat Data ruangan</h1>
  
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
  
  <form method="POST" action="{{ url('ruangan') }}">
    @csrf
    <input name="nama" type="text" placeholder="nama..."> 
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
