@extends('master')


@section('title', 'Hompage')

@section('content')

<div class="post-title">Post a message:</div>

<form method="POST" action="/create">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="content">Content:</label><br>
    <textarea id="content" name="content"></textarea><br><br>
    <input type="submit" value="Submit" class="cool-button">

</form>




<div class="post-title">Recent Messages: </div>

    <ul>
        @foreach ($messages as $message)
            <li>
                <strong>{{ $message->title }}</strong><br>
                {{ $message->content }}<br>
                {{ $message->created_at->diffForHumans() }}
                <br>
                <a class="view" href="/message/{{ $message->id }}">View</a>
            </li>            
        @endforeach
    </ul>

@endsection

