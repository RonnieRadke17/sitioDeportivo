<form action="{{route('grupo.update', $grupo->id)}}" method="POST">
    @csrf
    @method('PATCH')
   @include('grupo.form',['modo'=>'Editar'])
</form>