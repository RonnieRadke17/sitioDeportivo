Mostrar todas las grupos
@if (Session::has('mensaje'))
{{Session::get('mensaje')}}    
@endif

<a href="{{route('grupo.create')}}" class="btn btn-primary">Crear grupo</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Extracurricular</th>
            <th>Periodo</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($grupos as $grupo)
        <tr>
            <td>{{$grupo->id}}</td>
            <td>{{$grupo->NombreGrupo->nombre}}</td>
            <td>{{$grupo->Extracurricular->nombre}}</td>
            <td>{{$grupo->Periodo->inicio}} - {{$grupo->Periodo->fin}}</td>
            <td>{{$grupo->status}}</td>
            <td>
                <a href="{{route('grupo.edit', $grupo->id)}}" class="btn btn-warning">Editar</a> 
                |
                <form action="{{route('grupo.destroy', $grupo->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>