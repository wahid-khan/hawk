@extends('layouts.app')

@section('content')
    <a href="/hawk/public/posts" class="btn btn-primary">Back</a>
    <h1>Create Posts</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control' , 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control' , 'id' => 'article-ckeditor', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-success btn-lg'])}}
    {!! Form::close() !!}
@endsection