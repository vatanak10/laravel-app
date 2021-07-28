@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) >= 1)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%" alt="Cover Image">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3>
                            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                        </h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection