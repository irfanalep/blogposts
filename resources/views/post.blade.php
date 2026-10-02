@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mt-3 mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
                    in <a href="/categories/{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </p>
                <img src="{{ asset('img/pprei.jpg') }}" alt="PP Rei" class="img-fluid">

                <article>
                    <p>{!! $post->body !!}</p>
                </article>

                <a href="/posts" class="text-decoration-none d-block mt-3">Back to posts</a>
            </div>
        </div>
    </div>
@endsection
