{{$Modo=='Crear' ? 'Agregar Empleado':'Modificar empleado'}}
<br>
<label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
    <input type="text" name="ApellidoPaterno"  value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno : ''}}"><br>
    <label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
    <input type="text" name="ApellidoMaterno"  value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno : ''}}"><br>
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre"  value="{{isset($empleado->Nombre)?$empleado->Nombre : ''}}"><br>
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo"  value="{{isset($empleado->Correo)?$empleado->Correo : ''}}"><br>
    <label for="foto">{{'Foto'}}</label>
    @if(isset($empleado->foto))
    <img src="{{asset('storage').'/'.$empleado->Foto}}" id="blah" alt="" width="200">
    @endif
    <input type="file" id="imgInp" name="Foto"  value="{{isset($empleado->Foto)?$empleado->Foto : ''}}"><br>
    <input type="submit" value="{{$Modo=='Crear' ? 'Agregar':'Modificar'}}">

    <a href="{{url('empleados')}}">Regresar</a>
