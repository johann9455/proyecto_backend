 <br>
<label for="Codigo Identificación">Codigo Identificación</label>
<input type="text" name="id" value="{{ $Clientes->id }}" id="Codigo de identificacion">
<br>


<label for="cedula">Numero de cedula</label>
<input type="text" name="cedula" value="{{ $Clientes->cedula }}" id="Numero de cedula">
<br>

<label for="Nombre">Nombre</label>
<input type="text" name="nombre" value="{{ $Clientes->nombre }}" id="Nombre">
<br>

<label for="Número de telefono">Número de telefonico</label>
<input type="text" name="numero_de_telefono" value="{{ $Clientes->numero_de_telefono }}" id="Número_de_telefono">
<br>

<label for="correo electronico">Correo electronico</label>
<input type="text" name="correo_electronico" value="{{ $Clientes->correo_electronico }}" id="correo_electronico"> 
<br>
<br>

<input type="submit" value="Guardar datos">
<br>