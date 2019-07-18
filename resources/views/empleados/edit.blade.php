<form  action="{{url('/empleados/'.$empleado->id)}}" enctype="multipart/form-data" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}
    <label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>          
    <input type="text" name="ApellidoPaterno"  value="{{$empleado->ApellidoPaterno}}"><br>
    <label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
    <input type="text" name="ApellidoMaterno"  value="{{$empleado->ApellidoMaterno}}"><br>
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre"  value="{{$empleado->Nombre}}"><br>
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo"  value="{{$empleado->Correo}}"><br>
    <label for="foto">{{'Foto'}}</label><img src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt=""> <br>
    <input type="file" name="Foto"  value=""><br>
    <a href="../">cancelar</a>
    <input type="submit" value="Editar">

</form>