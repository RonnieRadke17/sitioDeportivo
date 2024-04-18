Mostrar todas las tipoEventos
@if (Session::has('mensaje'))
{{Session::get('mensaje')}}    
@endif

<a href="{{route('tipoEvento.create')}}" class="btn btn-primary">Crear tipoEvento</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipoEventos as $tipoEvento)
        <tr>
            <td>{{$tipoEvento->id}}</td>
            <td>{{$tipoEvento->nombre}}</td>
            <td>
                <a href="{{route('tipoEvento.edit', $tipoEvento->id)}}" class="btn btn-warning">Editar</a> 
                |
                <form action="{{route('tipoEvento.destroy', $tipoEvento->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>