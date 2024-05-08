Mostrar la lista de empleados
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>cedula</th>
            <th>nombre</th>
            <th>numero de telefono</th>
            <th>correo electronico</th>
            
        </tr>
    </thead>

    <tbody>
        @foreach($Clientes as $Clientes)
        <tr>
            <td>{{$Clientes->id}}</td>
            <td>{{$Clientes->cedula}}</td>
            <td>{{$Clientes->nombre}}</td>
            <td>{{$Clientes->numero_de_telefono}}</td>
            <td>{{$Clientes->correo_electronico}}</td>
            <td>
                
            
            <a href="{{ url('/clientes/'.$Clientes->id.'/edit') }}">
                Editar
            </a>

                <form action="{{ url('/clientes/'.$Clientes->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}
                 <input type="submit" onclick="return confirm('¿Quieres borrar?')"value="Borrar">

                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>