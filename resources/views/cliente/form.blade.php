<br><br>
  <div style=" text-align: center;">
   <label>Digite Nombres*</label><br>
    <input type="text" name="nombres_cliente" value= "{{ $cliente->nombres_cliente }}"><br>

    <label>Digite Apellidos*</label><br>
    <input type="text" name="apellidos_cliente" value= "{{ $cliente->apellidos_cliente }}"><br>

    <label>Digite Ciudad*</label><br>
    <input type="text" name="ciudad_cliente" value= "{{ $cliente->ciudad_cliente }}"><br>

    <label>Digite Telefono*</label><br>
    <input type="number" name="telefono_cliente" value= "{{ $cliente->telefono_cliente }}"><br>

    <input type="submit" value="Guardar">
 </div>
