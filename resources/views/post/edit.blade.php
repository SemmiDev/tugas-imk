@extends('layouts.app', ['title' => 'Edit Post'])

@section('head')
<style>
    body {
        background-color: #343a40;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Post</div>
                    <div class="card-body">
                        <form action="/posts/{{ $post->slug }}/update" method="post" autocomplete="off">
                            @method('patch')
                            @csrf
                            @include('post.partials.form-control')
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@stop
