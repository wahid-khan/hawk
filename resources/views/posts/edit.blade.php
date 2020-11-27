@extends('layouts.app')

@section('content')
    <a href="/hawk/public/posts" class="btn btn-primary">Back</a>
    <h1>Edit Post {{$post->id}}</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control' , 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control' , 'id' => 'article-ckeditor', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class' => 'btn btn-success btn-lg'])}}
    {!! Form::close() !!}
@endsection