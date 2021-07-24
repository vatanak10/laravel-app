@extends('layouts.app')

@section('content')
    {{-- <h1>Welcome to Services Page</h1> --}}
    <h1>{{$title}}</h1>
    {{-- <p>This is my laravel application on Serives section</p> --}}
    @if (count($services)>0)
        <ul class="list-group">
        @foreach ($services as $item)
            <li class="list-group-item">{{$item}}</li>
        @endforeach
        </ul>
    @endif
@endsection