Mostrar todas las rols
@if (Session::has('mensaje'))
{{Session::get('mensaje')}}    
@endif

<a href="{{route('rol.create')}}" class="btn btn-primary">Crear rol</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $rol)
        <tr>
            <td>{{$rol->id}}</td>
            <td>{{$rol->nombre}}</td>
            <td>
                <a href="{{route('rol.edit', $rol->id)}}" class="btn btn-warning">Editar</a> 
                |
                <form action="{{route('rol.destroy', $rol->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>