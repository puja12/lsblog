@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach ($posts as $post)
            <ul class="list-group">
                <li class="list-group-item" style="margin-bottom: 10px;">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </li>
            </ul>
        @endforeach
        {{$posts->links()}}
    @else 
        <p> No posts found!!!</p>
    @endif
@endsection