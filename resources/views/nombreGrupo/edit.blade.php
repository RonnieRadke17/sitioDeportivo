<form action="{{route('nombreGrupo.update', $nombreGrupo->id)}}" method="POST">
    @csrf
    @method('PATCH')
   @include('nombreGrupo.form',['modo'=>'Editar'])
</form>