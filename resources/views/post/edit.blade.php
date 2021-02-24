@extends('layouts.app', ['title' => 'Edit Post'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Post</div>
                    <div class="card-body">
                        <form action="posts/update" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                                @error('title')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="body">Content</label>
                                <textarea name="body" id="body" class="form-control"></textarea>
                                @error('body')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>

                                @enderror
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@stop