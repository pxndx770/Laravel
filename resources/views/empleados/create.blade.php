
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<form action="{{ url('/empleados')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
   
    <label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
    <input type="text" name="ApellidoPaterno"  value=""><br>
    <label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
    <input type="text" name="ApellidoMaterno"  value=""><br>
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre"  value=""><br>
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo"  value=""><br>
    <label for="foto">{{'Foto'}}</label>
    <img src="#" id="blah" alt="">
    <input type="file" id="imgInp" name="Foto"  value=""><br>
    <input type="submit" value="Agregar">



</form>


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
