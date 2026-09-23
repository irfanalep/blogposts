@extends('layouts.main')

@section('container')
    <h1 class="mt-3 mb-4">{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <p>By <a href="/authors/{{ $posts[0]->user->username }}"
                        class="text-decoration-none">{{ $posts[0]->user->name }}</a>
                    in
                    <a href="/categories/{{ $posts[0]->category->slug }}"
                        class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <p class="card-text"><small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>
            </div>
        </div>
    @else
    @endif
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>By <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
                in
                <a href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a>
            </p>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
@endsection
