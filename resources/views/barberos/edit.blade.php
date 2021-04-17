<form action="{{ url('/barberos/' . $barbero->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <label for="Nombre">{{'Nombre completo'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{$barbero->nombre}}">
    <br/>

    <label for="Estado">{{'Estado'}}</label>
    <input type="text" name="Estado" id="Estado" value="{{$barbero->estado}}">
    <br/>

    <input type="submit" value="Actualizar informacion">
</form>
