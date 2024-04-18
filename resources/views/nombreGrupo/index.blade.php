Mostrar todas las carreras
@if (Session::has('mensaje'))
{{Session::get('mensaje')}}    
@endif

<a href="{{route('nombreGrupo.create')}}" class="btn btn-primary">Crear nombre grupo</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nombreGrupo as $nomGrupo)
        <tr>
            <td>{{$nomGrupo->id}}</td>
            <td>{{$nomGrupo->nombre}}</td>
            <td>
                <a href="{{route('nombreGrupo.edit', $nomGrupo->id)}}" class="btn btn-warning">Editar</a> 
                |
                <form action="{{route('nombreGrupo.destroy', $nomGrupo->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>