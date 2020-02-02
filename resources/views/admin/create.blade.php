
@extends('layouts.admin')
@section('contenidoAdmin')

    
    <div class="w-25 p-5 border-primary text-left" style="border: 1px solid black; color: black; margin-left: 10%; float: left; margin-bottom: 50%;">
        <h2>Nuevo Rol</h2>  
        <form action="{{route('roles.store')}}" method="POST">
            {{ csrf_field() }}
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="display_name" placeholder="Nombre completo">
            <input type="text" name="description" placeholder="Descripcion"><br><br>
            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
    </div>
    
@endsection