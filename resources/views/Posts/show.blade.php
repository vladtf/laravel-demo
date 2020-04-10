@extends('layouts.app')

@section('content')
    <a href="/posts" style="margin-bottom: 20px;" class="btn btn-light btn-outline-info">Go Back</a>
    <h1 class="card-header">{{$post->title}}</h1>
    <div class="card-body">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    {!! Form::open(['action' => ['PostController@destroy', $post->id],'method'=>'POST', 'class'=> 'form-inline float-sm-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection


