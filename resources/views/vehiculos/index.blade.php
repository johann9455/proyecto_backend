Mostrar la lista de vehiculos
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <tr>placa</tr>
            <tr>modelo</tr>
            <tr> Año de fabricacion </tr>
            <tr> Estado </tr>
            <tr> Tarifas por dia </tr>
    
        </tr>
    </thead>

    <tbody>
        @foreach($Vehiculos as $Vehiculos)
        <tr>
            <td>{{$Vehiculos->id}}</td>
            <td>{{$Vehiculos->Placa}}</td>
            <td>{{$Vehiculos->Modelo}}</td>
            <td>{{$Vehiculos->Año_de_fabricacion}}</td>
            <td>{{$Vehiculos->Estado}}</td>
            <td>{{$Vehiculos->Tarifas_por_dia}}</td>
            <td>
                <a href="{{ url('/vehiculos/'.$Vehiculos->id.'/edit') }}">
                 Editar
                </a>
                 
                
             <form action="{{ url('/vehiculos/'.$Vehiculos->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')"value="Borrar">
    
                </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>