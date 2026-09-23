@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <p>{{ $name }}</p>
    <p>{{ $personality }}</p>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection
