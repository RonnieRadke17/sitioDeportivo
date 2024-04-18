<!--form de C y U-->
@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach
@endif

<label for="nombreGrupo_id">Nombre del Grupo:</label>
<select name="nombreGrupo_id">
    @foreach($nombreGrupo as $id => $nombre)
        <option value="{{ $id }}" {{ $grupo->nombreGrupo_id == $id ? 'selected' : '' }}>{{ $nombre }}</option>
    @endforeach
</select>
<br>
<label for="Extracurricular_id">Nombre de la Extracurricular:</label>
<select name="Extracurricular_id">
    @foreach($nombreExtracurricular as $id => $nombre)
        <option value="{{ $id }}" {{ $grupo->Extracurricular_id == $id ? 'selected' : '' }}>{{ $nombre }}</option>
    @endforeach
</select>
<br>
<label for="Periodo_id">Periodo:</label>
<select name="Periodo_id">
    @foreach($periodoOptions as $id => $inicioFin)
        <option value="{{ $id }}">{{ $inicioFin }}</option>
    @endforeach
</select>

<!---cuando es el editacion falta poner el status de A/NA---->


<br>
<label for="categoria_id">ID de la Extracurricular:</label>
<span>{{ $grupo->Extracurricular_id ?? '' }}</span>
<br>
<label for="categoria_id">ID de la nombreGrupo:</label>
<span>{{ $grupo->nombreGrupo_id ?? '' }}</span>
<br>
<label for="categoria_id">ID de Periodo:</label>
<span>{{ $grupo->Periodo_id ?? '' }}</span>


<input type="submit" value="{{$modo}}">