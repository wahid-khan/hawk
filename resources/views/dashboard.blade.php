@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/hawk/public/posts/create" class="btn btn-primary">Create New</a>
                    @if (count($posts) > 0)
                        <table class="table table-stiped">
                            <tr>
                                <th>Title Posts</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}} by {{$post->user->name}}</td>
                                    <td><a class="btn btn-default" href="/hawk/public/posts/{{$post->id}}/edit">Edit</a></td>
                                    <td><a class="btn btn-default" href="/hawk/public/posts/{{$post->id}}">View</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST','class' => 'pull-right pr-1'] )!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <a href="/hawk/public/posts/create"><p style="text-align: center">No Posts Found</p></a>
                    @endif
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
