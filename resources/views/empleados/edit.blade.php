@extends('layouts.app')

@section('content')
<div class="container">
<form  action="{{url('/empleados/'.$empleado->id)}}" enctype="multipart/form-data" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}
@include('empleados.form',['Modo'=>'Editar'])

    
</form>
</div>
@endsection