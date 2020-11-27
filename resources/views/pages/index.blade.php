@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <div class="container">
        <h1><a href="/hawk/public/">{{$title}}</a></h1>
        <!-- Some Content -->
        <p>Register yourself with HAWK</p>
        <!-- Sign in button -->
        @if (Auth::guest())
            <a href="{{ route('login') }}"><button class="btn btn-primary btn-lg" type="submit">Log In</button></a>
            <a href="{{ route('register') }}"><button class="btn btn-success btn-lg" type="submit">Register</button></a>
        @endif
    </div>
</div>
@endsection

