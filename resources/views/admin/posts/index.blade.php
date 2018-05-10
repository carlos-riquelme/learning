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
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@stop