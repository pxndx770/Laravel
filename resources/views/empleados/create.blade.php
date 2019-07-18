
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creación</title>

</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<form action="{{ url('/empleados')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
   
    @include('empleados.form',['Modo'=>'Crear'])
    
</form>
</div>
@endsection

<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function() {
    readURL(this);
});
</script>
</body>
</html>
