@extends('layouts.app', ['title' => 'FAMILY'])

@section('head')
<style>
    body {
        background-color: #343a40;
    }
</style>
@endsection

@section('content')
<div class="container">
        <div class="d-flex justify-content-between">
            <div>
                @isset($category)
                    <h4>Status: {{ $category->name }}</h4>
                    <hr>
                @else
                    <h4>Family</h4>
                    <hr>
                @endisset
            </div>
            <div>

                @if (Auth::check())
                    <a href=" {{ route('posts.create') }} " class="btn btn-primary">NEW MEMBER</a>
                @else
                    <a href=" {{ route('login') }} " class="btn btn-primary">Login to create new member</a>
                @endif
                </div>
        </div>
        <br>

        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4 card-accent-primary bg-light border-success">

                        <div class="card-header">
                            {{ $post->title }}
                        </div>

                        <div class="card-body">
                            <div>
                                {{Str::limit($post->body, 100, '.') }}
                            </div>
                            <a href="posts/{{ $post->slug }}">Read More</a>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            Published on {{ $post->created_at->diffForHumans() }}
                            @auth
                                <a href="posts/{{ $post->slug }}/edit" class="btn btn-success btn-sm">Edit</a>
                            @endauth
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-info">
                    There are no member!
                </div>
            @endforelse
        </div>
</div>
<div class="d-flex justify-content-center">
    <div>
        {{ $posts->links() }}
    </div>
</div>
@stop
