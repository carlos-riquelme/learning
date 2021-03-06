@extends('layouts.admin')

@section('content')

<h1>Posts</h1>

<table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Categoría</th>
                <th>Title</th>
                <th>Body</th>
                <th>Post</th>
                <th>Comments</th>
                <th>Fecha de creación</th>
                <th>Fecha de actualización</th>
            </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img height="50" src="{{$post->photo ? $post->photo->file : '/images//50x50.png' }}" alt=""></td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category ? $post->category->name : "Sin Categoría"}}</td>
                {{--  <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a></td>  --}}
                <td><a href="{{route('admin.posts.edit', $post->id)}}" >{{$post->title}}</a></td>
                <td>{{str_limit($post->body, 30)}}</td>
                <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
                <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@stop