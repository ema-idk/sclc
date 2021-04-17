<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($barberos as $barbero)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $barbero->nombre}}</td>
            <td>{{ $barbero->estado}}</td>
            <td>
                <a href="{{ url('/barberos/'.$barbero->id.'/edit') }}"> Editar </a>
                |
                <form method="post" action="{{ url('/barberos/'.$barbero->id) }}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('¿Deseas eliminar al barbero?')">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
