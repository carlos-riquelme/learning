@extends('layouts.admin')

@section('content')

    <h1>Usuarios</h1>

    <table></table>
    
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Fecha de registro</th>
                <th>Fecha de actualización</th>
            </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><img height= "50" src="{{$user->photo ? $user->photo->file : '/images//50x50.png'}}" alt=""></td>
                <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active == 1 ? 'Activo' : 'Inactivo'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif

        </tbody>
    </table>
    

@stop