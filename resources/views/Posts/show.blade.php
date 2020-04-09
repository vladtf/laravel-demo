@extends('layouts.app')

@section('content')
    <a href="/posts" style="margin-bottom: 20px;" class="btn btn-light btn-outline-info">Go Back</a>
        <h1 class="card-header">{{$post->title}}</h1>
            <div class="card-body">
                {!!$post->body!!}
            </div>
        <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection


