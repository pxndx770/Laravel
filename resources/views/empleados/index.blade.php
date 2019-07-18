@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('Mensaje')){{
                Session::get('Mensaje')
            }}
        @endif
<table class="table table-light table-hover">
    <thead text-align="center">
        <tr>
        <th>ID</th>
        
        <th>Nombre Completo</th>
        <th>Correo</th>
        <th>Foto</th>
        <th>Acciones</th>
        </tr>
    </thead>
    <body>
        

        <a href="{{url('empleados/create')}}" class="btn btn-success">Agregar empleado</a>
        <br>
        <br>

        @foreach($empleados as $empleado)
            <tr>
             <td>{{$loop->iteration}}</td>
             
             <td>{{$empleado->Nombre}} {{$empleado->ApellidoPaterno}} {{$empleado->ApellidoMaterno}}</td>
             <td>{{$empleado->Correo}}</td>
             <td> <img src="{{asset('storage').'/'.$empleado->Foto}}" class="img thumbnail img img-fluid" alt="" width="100"></td>
             <td><a href="{{url('/empleados/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a> | <form action="{{url('/empleados/'.$empleado->id)}}" method="post" style="display:inline">
             {{csrf_field()}}
             {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger">Borrar</button>

             </form></td>
            </tr>
        @endforeach
    </body>
</table>
        </div>
@endsection