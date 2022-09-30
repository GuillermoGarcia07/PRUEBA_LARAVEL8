<table border>
        <th>ID</th>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>CIUDAD</hr>
        <th>TELEFONO</th>
        <th>ACCIONES</th>
    <tbody>
        @foreach($cliente as $c)
        <tr>
            <td> {{$c->id}}</td>
            <td> {{$c->nombres_cliente}} </td>
            <td> {{$c->apellidos_cliente}} </td>
            <td> {{$c->ciudad_cliente}} </td>
            <td> {{$c->telefono_cliente}} </td>
            <td>
                <a href="{{ url('/cliente/'.$c->id.'/edit') }}">
                    Editar
                </a>
                |
                  <form action="{{ url('/cliente/'.$c->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                  <input type="submit" onclick="return confirm('¿Deseas eliminar el Registro?')"
                  value="Eliminar">
                </form>

            </td>
        </tr>
        @endForeach
    </tbody>
</table>
