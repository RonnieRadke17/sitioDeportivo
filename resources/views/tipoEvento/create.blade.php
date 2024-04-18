creacion de tipoEvento

<form action="{{ url('tipoEvento') }}" method="POST">
    @csrf
   @include('tipoEvento.form',['modo'=>'Registrar'])
</form>