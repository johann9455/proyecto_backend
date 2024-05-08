<label for="Codigo Identificación">Codigo Identificación</label>
    <input type="text" name="id" value="{{ $Reservas->id}}" id="Codigo de identificacion">
    <br>

    <label for="Fecha inicio">Fecha inicio</label>
    <input type="text" name="Fecha_inicio" value="{{ $Reservas->Fecha_inicio}}" id="Fecha inicio">
    <br>

    <label for="Fecha terminacion">Fecha final</label>
    <input type="text" name="Fecha_final" value="{{ $Reservas->Fecha_final}}" id="Fecha final">
    <br>

    <label for="Estado de la reserva">Estado de la reserva</label>
    <input type="text" name="Estado_de_la_reserva" value="{{ $Reservas->Estado_de_la_reserva}}" id="Estado de la reserva">
    <br>

    <label for="Tarifa total">Tarifa total</label>
    <input type="text" name="Tarifa_total" value="{{ $Reservas->Tarifa_total}}" id="Tarifa total"> 
    <br>

    <label for="Notas adicionales">Notas adicionales</label>
    <input type="text" name="Notas_adicionales" value="{{ $Reservas->Notas_adicionales}}" id="Notas  adicionales"> 
    <br>
    
    <label for="clientes_id">clientes id</label>
    <input type="text" name="clientes_id" value="{{ $Reservas->clientes_id}}" id="clientes_id"> 
    <br>

    <label for="vehiculos_id">vehiculos id</label>
    <input type="text" name="vehiculos_id" value="{{ $Reservas->vehiculos_id}}" id="vehiculos_id"> 
    <br>
    <br>

    <input type="submit" value="Guardar datos">
    <br>