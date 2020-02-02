
@extends('layouts.admin')
@section('contenidoAdmin')

    @foreach($roles as $role)
        <div class="p-5 border-primary text-center" style="border: 1px solid black; color: black; margin-left: 2%; float: left; margin-bottom: 50%; width: 15%; height: 30%;">
            <h2>Añadir Rol</h2>
            <h4>Usuario: {{$usuario->name}}</h4>  
                <form action="{{route('roles.storeRole', $role->id)}}" method="POST">
                    {{ csrf_field() }}
                    <input type="text" name="user_id" value="{{$usuario->id}}" hidden="True">
                    <h2>Role</h2>
                    <h3>{{$role->name}}</h3>
                    <?php $count=0 ?>
                    @foreach($usuario->roles as $rol)
                        @if($rol->name == $role->name)
                            <?php $count = $count+1 ?>
                        @endif
                    @endforeach
                    @if($count == 0)
                        <button class="btn btn-primary" type="submit">Añadir</button>
                    @endif
                </form>
                @if($count == 1)
                    <button class="btn btn-success" type="submit">Añadido</button>
                @endif
        </div>
    @endforeach
@endsection