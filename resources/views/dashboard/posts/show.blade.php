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
                    <a href="" class="btn btn-warning"><svg class="bi" aria-hidden="true">
                            <use xlink:href="#pencil-square"></use>
                        </svg>Edit</a>
                    <a href="" class="btn btn-danger"><svg class="bi" aria-hidden="true">
                            <use xlink:href="#trash"></use>
                        </svg>Delete</a>
                </div>
                <img src="{{ asset('img/pprei.jpg') }}" alt="PP Rei" class="img-fluid">
                <article>
                    <p>{!! $post->body !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection
