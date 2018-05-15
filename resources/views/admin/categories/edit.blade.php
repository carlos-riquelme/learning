@extends('layouts.admin')

@section('content')

<h1>Categorías</h1>

<div class="col-sm6">


{!! Form::model($categories, ['method'=> 'PATCH', 'action'=> ['AdminCategoriesController@update', $categories->id]]) !!}
        <div class="form-group">
                
                {!! Form::label('name', 'Name:') !!}
                
                {!! Form::text('name', null, ['class'=> 'form-control']) !!}
                
        </div>
        <div class="form-group">
                
                {!! Form::submit('Update Category', ['class'=> 'btn btn-primary']) !!}
                
        </div>

{!! Form::close() !!}



</div>

<div class="col-sm6">


{!! Form::open(['method'=> 'DELETE', 'action'=> ['AdminCategoriesController@destroy', $categories->id]]) !!}
        <div class="form-group">
                
                {!! Form::submit('Delete Category', ['class'=> 'btn btn-danger']) !!}
                
        </div>

{!! Form::close() !!}



</div>


@stop