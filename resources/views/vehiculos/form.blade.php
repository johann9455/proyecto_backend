<label for="Codigo Identificación">Codigo Identificación</label>
    <input type="text" name="id" value="{{ $Vehiculos->id}}" id="Codigo de identificacion">
    <br>

    <label for="Placa">Placa</label>
    <input type="text" name="Placa" value="{{ $Vehiculos->Placa}}" id="Placa">
    <br>

    <label for="Modelo">Modelo</label>
    <input type="text" name="Modelo" value="{{ $Vehiculos->Modelo}}" id="Modelo">
    <br>

    <label for="Año de fabricacion">Año de fabricacion</label>
    <input type="text" name="Año_de_fabricacion" value="{{ $Vehiculos->Año_de_fabricacion}}" id="Año de fabricacion">
    <br>

    <label for="Estado">Estado</label>
    <input type="text" name="Estado" value="{{ $Vehiculos->Estado}}" id="Estado"> 
    <br>

    <label for="Tarifas por día">Tarifas por dia</label>
    <input type="text" name="Tarifas_por_dia" value="{{ $Vehiculos->Tarifas_por_dia}}" id="Tarifas por día"> 
    <br>
    <br>

    <input type="submit" value="Guardar datos"> 
    <br>