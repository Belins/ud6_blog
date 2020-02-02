
@extends('layouts.admin')
@section('contenidoAdmin')

    @foreach($usuario->roles as $role)
        <div class="w-25 p-5 border-primary text-center" style="border: 1px solid black; color: black; margin-left: 10%; float: left; margin-bottom: 50%;">
            <h2>Añadir Rol</h2>
            <h4>Usuario: {{$usuario->name}}</h4>  
                <form action="{{route('roles.deleteRole', $role->id)}}" method="POST">
                    {{ csrf_field() }}
                    <input type="text" name="user_id" value="{{$usuario->id}}" hidden="True">
                    <h2>Role</h2>
                    <h3>{{$role->name}}</h3>
                    <button type="submit" class="btn btn-danger">Eliminar Role</button>
                </form>
        </div>
    @endforeach
@endsection