creacion de carreras

<form action="{{ url('grupo') }}" method="POST">
    @csrf
   @include('grupo.form',['modo'=>'Registrar'])
</form>