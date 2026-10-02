@extends('layouts.main')

@section('container')
    <h1>Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/categories/{{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <img src="{{ asset('img/ppreidua.jpg') }}" class="card-img" alt="PP Rei Dua">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4"
                                    style="background-color: rgba(0, 0, 0, 0.5)">
                                    {{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
