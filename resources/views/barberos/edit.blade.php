<link rel="stylesheet" href="{{asset('css/app.css')}}">
<body><h1>Edicion Barbero</h1>
<img class="imagen_edicion" src="{{asset('storage').'/'.$barbero->foto}}" alt="">
<div class="crear_Barberos">
    <form action="{{ url('/barberos/' . $barbero->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <label for="Nombre">{{'Nombre completo'}}</label>
        <input type="text" name="Nombre" id="Nombre" value="{{$barbero->nombre}}">
        <br/><br/>
        <label for="contrasena">{{'contrasena'}}</label>
        <input type="text" name="contrasena" id="contrasena" value="{{$barbero->contrasena}}">
        <br/><br/>
        <label for="Correo">{{'Correo'}}</label>
        <input type="email" name="Correo" id="Correo" value="{{$barbero->correo}}">
        <br/><br/>

        <label for="Estado">{{'Estado'}}</label>
        <input type="text" name="Estado" id="Estado"  value="{{$barbero->estado}}  "    >
        <br/><br/>
        <label for="telefono">Telefono</label>

        <input type="text" name="Telefono" id="Telefono" value="{{$barbero->telefono}}">
        <br><br/>
        <label for="foto">Foto</label>


        <input type="file" name="Foto" id="Foto" value="{{$barbero->foto}}">
        <br>
        <input class="estilo_Submit" type="submit" value="Actualizar informacion">
    </form>
</div>
</body>
<a href="{{ url('/barberos/') }}">Regresar a las consultas de gerente</a>
