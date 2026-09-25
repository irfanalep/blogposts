@extends('layouts.main')

@section('container')
    <h1 class="mt-3 mb-4">{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="{{ asset('img/ppeva.webp') }}" class="card-img-top" alt="EVA-01">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-body-secondary">
                        By <a href="/authors/{{ $posts[0]->user->username }}"
                            class="text-decoration-none">{{ $posts[0]->user->name }}</a>
                        in
                        <a href="/categories/{{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a> •
                        {{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                </p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    @else
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/ppshinji.jpg') }}" class="card-img-top" alt="PP Shinji">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/posts/{{ $post->slug }}"
                                    class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                            <p>
                                <small class="text-body-secondary">
                                    By <a href="/authors/{{ $post->user->username }}"
                                        class="text-decoration-none">{{ $post->user->name }}</a>
                                    in
                                    <a href="/categories/{{ $post->category->slug }}"
                                        class="text-decoration-none">{{ $post->category->name }}</a> •
                                    {{ $post->created_at->diffForHumans() }}</small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
