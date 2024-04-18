<form action="{{route('rol.update', $rol->id)}}" method="POST">
    @csrf
    @method('PATCH')
   @include('rol.form',['modo'=>'Editar'])
</form>