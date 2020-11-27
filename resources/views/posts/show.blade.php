@extends('layouts.app')

@section('content')
    <a href="/hawk/public/posts" class="btn btn-primary">Back</a>
    <h1>{{$post->title}}</h1>
        <div class="well">
            <p>{!!$post->body!!}</p>
            <small>Arrived At: {{$post->created_at}} by  {{$post->user->name}}</small>
            @if (!Auth::guest())
                @if (Auth::user()->id == $post->user_id)
                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST','class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close() !!}
                @endif
            @endif
        </div>
@endsection