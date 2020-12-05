@extends('layouts.app')

@section('content')
    <h1><a href="/hawk/public/posts">POSTS</a></h1>
    @if (!Auth::guest())
        <div class="element-box" style="max-width:88vw;overflow-x:auto;">
            <a href="/hawk/public/posts/create" class="btn btn-primary">Add New Post</a><hr>
        </div>
    @endif
        @if(count($posts) > 0)
            @foreach ($posts as $post)
                <div class="well">
                <h3><a href="/hawk/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Making At: {{$post->created_at}} by  {{$post->user->name}}</small>
                @if (!Auth::guest())
                    @if (Auth::user()->id == $post->user_id)
                    <a class="btn btn-info" href="/hawk/public/posts/{{$post->id}}/edit">Edit</a>
                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST','class' => 'pull-right pr-1'] )!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close() !!}
                    @endif
                @endif
    </div>
            @endforeach
    
            {{$posts->links()}}
        @else 
            <p>No data</p>
        @endif
@endsection