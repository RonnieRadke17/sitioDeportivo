<form action="{{route('tipoEvento.update', $tipoEvento->id)}}" method="POST">
    @csrf
    @method('PATCH')
   @include('tipoEvento.form',['modo'=>'Editar'])
</form>