creacion de NGrupos

<form action="{{ url('nombreGrupo') }}" method="POST">
    @csrf
   @include('nombreGrupo.form',['modo'=>'Registrar'])
</form>