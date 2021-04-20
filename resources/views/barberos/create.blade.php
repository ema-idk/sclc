<?php

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 10) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

// Output: iNCHNGzByPjhApvn7XBD
$codigo = generate_string($permitted_chars, 10);
?>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<body>
<h1>Creacion de barberos</h1>
<div class="crear_Barberos">
    <form action="{{ url('/barberos') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="Nombre">{{'Nombre completo'}}</label>
        <input type="text" name="Nombre" id="Nombre" value="">
        <br/>
        <br/>
        <label for="Correo">{{'Correo'}}</label>
        <input type="email" name="Correo" id="Correo" value="">
        <br/><br/>

        <label for="contrasena">{{'contrasena'}}</label>
        <input type="password" name="contrasena" id="contrasena" value="">
        <br/><br/>

        <label for="telefono">Telefono</label>

        <input type="text" name="Telefono" id="Telefono" value="">
        <br><br/>

        <label for="foto">Foto</label>

        <input type="file" name="Foto" id="Foto" value="">
        <!--//Se supone que estos 2 no se deben mirar a la hora de agregar los barberos-->
        <input type="hidden" name="Estado" id="Estado" value="Disponible" readonly>

        <br/>
    <!--<input type="hidden" name="Codigo" id="Codigo" value="<?php echo $codigo; ?>" readonly> -->
        <br/><br/>
        <input  class="estilo_Submit" type="submit" value="Guardar Datos">
        <br>

    </form>
</div>
</body>
<a href="{{ url('/barberos/') }}">Regresar a las consultas de gerente</a>
