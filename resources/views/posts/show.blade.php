@extends('layouts.app')

@section('content')
    <a href="/posts" style="margin-bottom: 20px;" class="btn btn-light btn-outline-info">Go Back</a>
    <h1 class="card-header">{{$post->title}}</h1>
    <img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" >
    <br>
    <br>
    <div class="card-body">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest() && $post->user_id == Auth::user()->id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

        {!! Form::open(['action' => ['PostController@destroy', $post->id],'method'=>'POST', 'class'=> 'form-inline float-sm-right']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endsection


