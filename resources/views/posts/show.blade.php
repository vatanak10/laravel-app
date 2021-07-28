@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-dark">Back</a>
    <h1>{{$post->title}}</h1>
    <p>{!!$post->body!!}</p>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest()) {{--If not logged in, won't be able to see--}}
        @if (Auth::user()->id == $post->user_id) {{--If only user is the one created this post then they will be able to see edit and delete button--}}
            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form:: submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection