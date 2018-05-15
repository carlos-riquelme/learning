@extends('layouts.admin')

@section('content')

<h1>Categorías</h1>

<div class="col-sm6">


{!! Form::open(['method'=> 'POST', 'action'=> 'AdminCategoriesController@store']) !!}
        <div class="form-group">
                
                {!! Form::label('name', 'Name:') !!}
                
                {!! Form::text('name', null, ['class'=> 'form-control']) !!}
                
        </div>
        <div class="form-group">
                
                {!! Form::submit('Create Category', ['class'=> 'btn btn-primary']) !!}
                
        </div>

{!! Form::close() !!}



</div>

<div class="col-sm6">

@if($categories)

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created date</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th>{{$category->id}}</th>
                <th><a href="{{route('admin.categories.edit', $category->id)}}" class="href">{{$category->name}}</a></th>
                <th>{{$category->created_at ? $category->created_at->diffForHumans() : 'Sin fecha'}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif

</div>

@stop