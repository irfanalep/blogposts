@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mt-3 mb-3">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <div class="mb-3">
                    <a href="/dashboard/posts" class="btn btn-success"><svg class="bi" aria-hidden="true">
                            <use xlink:href="#arrow-left"></use>
                        </svg>All Posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><svg class="bi"
                            aria-hidden="true">
                            <use xlink:href="#pencil-square"></use>
                        </svg>Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#trash"></use>
                            </svg>Delete
                        </button>
                    </form>
                </div>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Photo" class="img-fluid">
                @else
                    <img src="{{ asset('img/pprei.jpg') }}" alt="PP Rei" class="img-fluid">
                @endif
                <article>
                    <p>{!! $post->body !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection
