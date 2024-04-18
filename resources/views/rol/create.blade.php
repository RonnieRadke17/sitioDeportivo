creacion de carreras

<form action="{{ url('rol') }}" method="POST">
    @csrf
   @include('rol.form',['modo'=>'Registrar'])
</form>