@extends('layouts.app', ['title' => $post->title])

@section('head')
@endsection

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        {{ $post->body }}
    </div>
@endsection
