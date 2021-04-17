<form action="{{url('/barbero/' . $barbero->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
    {{method_field('PATCH')}}
    <label for="Nombre">{{'Nombre completo'}}</label>
<input type="text" name="Nombre" id="Nombre" value="{{$barbero->nombre}}">
<br/>

<label for="Estado">{{'Estado'}}</label>
    <input type="text" name="Estado" id="Estado" value="{{$barbero->estado}}">
    <br/>
<input type="submit" value="Actualizar informacion">
</form>
