@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostController@update', $post ->id], 'method'=>'POST']) !!}
    <div class="form-group">
        {{ Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{ Form::label('body','Body')}}
        {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
    </div>
    <div class="form-group">
        {{  Form::hidden('_method', 'PUT')}}
        {{  Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        {!! Form::open(['action' => ['PostController@destroy', $post->id],'method'=>'POST', 'class'=> 'form-inline float-sm-right']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!! Form::close() !!}
    </div>

@endsection
