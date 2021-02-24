@extends('layouts.app', ['title' => 'POSTS'])

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
                <h4 style="color: aliceblue">Family</h4>
                <hr>
            </div>
            <div>
                <a href="posts/create" class="btn btn-primary">NEW MEMBER</a>
            </div>
        </div>

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
                            <a href="posts/edit/{{ $post->slug }}" class="btn btn-success btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-info">
                    There are no posts!
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
