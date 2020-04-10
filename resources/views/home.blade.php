@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-1">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <h1 class="card-header">Your Blog Posts</h1>
                    <a href="/posts/create" class="page-link" role="button">Create a new post</a>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>

                        @endif

                        <table class="table table-striped">
                            <tr>
                                <th class="tab-content">Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td><a href="/posts/{{$post->id}}" class="card-link">{{$post->title}}</a></td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="card-link">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['PostController@destroy', $post->id],'method'=>'POST', 'class'=> 'form-inline float-sm-right']) !!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete', ['class'=>'btn btn-outline-danger btn-sm'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
