@extends('layouts.admin')
@section('contenidoAdmin')

<div style="margin-top: -800px">
	<button class="btn btn-primary ml-5 mb-3"><a class="text-white" href="{{route('roles.create')}}">Crear Rol</a></button>
    <table class="table table-condensed mb-5 w-50 bg-dark table-dark ml-5">
	    
	      <tr>
	        <th>Id</th>
	        <th>Nombre</th>
	        <th>Roles</th>
	        <th style="width:15px"></th>
	        <th style="width:15px"></th>
	      </tr>
	      @foreach ($usuarios as $usuario)
	      <tr>
	        <td>{{$usuario->id}}</td>
	        <td>{{$usuario->name}}</td>
	        <td>
	        	|
	        @foreach($usuario->roles as $role)
	        	{{$role->name}} | 
	        @endforeach
	        </td>
	        <td>
	          	<a title="Añadir Rol" href="{{route('roles.addRole', $usuario->id)}}"><i class="fa fa-plus" style="color:black"></i></a>
	        </td>
	        <td>
	          	<a title="Editar Roles" href="{{route('roles.editRole', $usuario->id)}}"><i class="fa fa-edit" style="color:black"></i></a>
	        </td>
	        <td>
	        </td>
	      </tr>
	      @endforeach
	    
    </table>
</div>
@endsection
