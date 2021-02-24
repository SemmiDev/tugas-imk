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
            <div class="card card-accent-primary bg-light border-success">
                <div class="card-header">New Member</div>
                    <div class="card-body">
                        <form action="/posts/store" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" name="title" id="title" class="form-control">
                                @error('title')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="body">Desc</label>
                                <textarea name="body" id="body" class="form-control"></textarea>
                                @error('body')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>

                                @enderror
                            </div>
                            <br>
                                <button type="submit" class="btn btn-success">Create</button>
                            </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@stop
