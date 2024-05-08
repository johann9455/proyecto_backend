Mostrar la lista de reservas
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <tr>fecha de inicio</tr>
            <tr>fecha final</tr>
            <tr> estado de la reserva </tr>
            <tr> tarifa total</tr>
            <tr>  Notas adicionales</tr>
            <tr>  clientes id</tr>
            <tr>  vehiculos id</tr>
           
        </tr>
    </thead>

    <tbody>
        @foreach($Reservas as $Reservas)
        <tr>
            <td>{{$Reservas->id}}</td>
            <td>{{$Reservas->Fecha_inicio}}</td>
            <td>{{$Reservas->Fecha_final}}</td>
            <td>{{$Reservas->Estado_de_la_reserva}}</td>
            <td>{{$Reservas->Tarifa_total}}</td>
            <td>{{$Reservas->Notas_adicionales}}</td>
            <td>{{$Reservas->clientes_id}}</td>
            <td>{{$Reservas->vehiculos_id}}</td>
            <td>
                
                <a href="{{ url('/reservas/'.$Reservas->id.'/edit') }}">
                    Editar
                </a>
                 

                <form action="{{ url('/reservas/'.$Reservas->id) }}" method="post">
                 @csrf
                {{ method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')"value="Borrar">
    
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>