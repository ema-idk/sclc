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

<form action="{{ url('/barberos') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="Nombre">{{'Nombre completo'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="">
    <br/>

    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo" id="Correo" value="">
    <br/>

    <!--//Se supone que estos 2 no se deben mirar a la hora de agregar los barberos-->
    <label for="Estado">{{'Estado'}}</label>
    <input type="text" name="Estado" id="Estado" value="Disponible" readonly>
    <br/>

    <label for="Codigo">{{'Codigo'}}</label>
    <input type="text" name="Codigo" id="Codigo" value="<?php echo $codigo; ?>" readonly>
    <!--<input type="text" name="Codigo" id="Codigo" value="">-->
    <br/>

    <input type="submit" value="Agregar barbero">
</form>
