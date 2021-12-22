
@extends('layouts.app')
@section('nama', 'update data ruangan')
@section('content')
<div class="wrapper">
  <h1>update data ruangan</h1>
  
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
  
  <form method="POST" action="{{ url('ruangan', $ruangan->id ) }}">
    @csrf
    @method('PUT')
    <input name="nama" value="{{ $ruangan->title }}" type="text" placeholder="nama..."> 
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
