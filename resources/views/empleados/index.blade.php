@if(Session::has('Mensaje')){{
                Session::get('Mensaje')
            }}
        @endif
<table border="1">
    <thead>
        <tr>
        <th>ID</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Foto</th>
        </tr>
    </thead>
    <body>
        

        <a href="{{url('empleados/create')}}">Agregar empleado</a>
        @foreach($empleados as $empleado)
            <tr>
             <td>{{$loop->iteration}}</td>
             <td>{{$empleado->ApellidoPaterno}}</td>
             <td>{{$empleado->ApellidoMaterno}}</td>
             <td>{{$empleado->Nombre}}</td>
             <td>{{$empleado->Correo}}</td>
             <td> <img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="120"></td>
             <td><a href="{{url('/empleados/'.$empleado->id.'/edit')}}">Editar</a> | <form action="{{url('/empleados/'.$empleado->id)}}" method="post">
             {{csrf_field()}}
             {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>

             </form></td>
            </tr>
        @endforeach
    </body>
</table>