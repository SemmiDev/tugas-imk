@extends('layouts.app', ['title' => 'New Post'])


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

            @include('alert')

            <div class="card card-accent-primary bg-light border-success">
                <div class="card-header">New Member</div>
                    <div class="card-body">
                        <form action="/posts/store" method="post">
                            @csrf
                            @include('post.partials.form-control', ['submit' => 'Create'])
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@stop
