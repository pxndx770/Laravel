<div class="form-group">

{{$Modo=='Crear' ? 'Agregar Empleado':'Modificar empleado'}}
<br><br>
<label for="ApellidoPaterno" class="control-label">{{'ApellidoPaterno'}}</label>
    <input type="text" name="ApellidoPaterno" class="form-control" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno : ''}}"><br>
    <label for="ApellidoMaterno" class="control-label">{{'ApellidoMaterno'}}</label>
    <input type="text" name="ApellidoMaterno" class="form-control" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno : ''}}"><br>
    <label for="Nombre" class="control-label">{{'Nombre'}}</label>
    <input type="text" name="Nombre" class="form-control" value="{{isset($empleado->Nombre)?$empleado->Nombre : ''}}"><br>
    <label for="Correo" class="control-label">{{'Correo'}}</label>
    <input type="email" name="Correo" class="form-control" value="{{isset($empleado->Correo)?$empleado->Correo : ''}}"><br>
    <label for="foto" class="control-label">{{'Foto'}}</label>
    </div>
    @if(isset($empleado->foto))
    <img src="{{asset('storage').'/'.$empleado->Foto}}" class="img thumbnail img img-fluid" id="blah" alt="" width="200">
    @endif
   
    
    <input type="file" id="imgInp" name="Foto" class="form-control" value="{{isset($empleado->Foto)?$empleado->Foto : ''}}"><br>
    <input type="submit" class="btn btn-dark" value="{{$Modo=='Crear' ? 'Agregar':'Modificar'}}">
    <a href="{{url('empleados')}}" class="btn btn-danger">Regresar</a>

