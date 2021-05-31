<link rel="stylesheet" href="{{asset('css/app.css')}}">

<h1>Lista de barberos</h1>

<body class="texto_Barberos">
@foreach($barberos as $barbero)
    <tr>
    <!--  <td>{{ $loop->iteration}}</td>
-->

        <div class="container"><P><img src="{{asset('storage').'/'.$barbero->foto}}" class="img-thumbnail" alt="">

                {{ $barbero->nombre}}

                {{ $barbero->estado}}</P>
        </div><br>
        <div class="division_informacion">
            Informacion <br>

            Telefono: {{ $barbero->telefono}}
            <br>
            Correo: {{ $barbero->correo}}

            <br><a href="{{ url('/barberos/'.$barbero->id.'/edit') }}"> Editar </a>
            <form method="post" action="{{ url('/barberos/'.$barbero->id) }}">

                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Deseas eliminar al barbero?')">Borrar</button>

            </form>
        </div>
        </p>
        </td>
    </tr>
@endforeach

</body>

<a href="{{ url('/barberos/create') }}"> <img src="{{asset('storage'.'/')}}"></a>

