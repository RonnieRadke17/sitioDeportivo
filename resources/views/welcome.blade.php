<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <!-- En tu vista donde quieres mostrar el contenido -->
@if(session('usuario'))
@php
    $usuario = session('usuario');
    $esAlumno = false;

    // Obtener todos los roles asociados al usuario
    $rolesUsuario = $usuario->roles;

    // Verificar si alguno de esos roles es el rol de "Alumno"
    foreach ($rolesUsuario as $rol) {
        if ($rol->nombre === 'Alumno') {
            $esAlumno = true;
            break;
        }
    }
@endphp

@if($esAlumno)
    <h3>Bienvenido, alumno {{ $usuario->nombre }}</h3>
    <!-- Botón para redirigir al índice de registroGrupo -->
<a href="{{ route('registroGrupo.index') }}" class="btn btn-primary">Ir a Registro Grupo</a>

<h4>Eventos proximamente....</h4>
@endif
@endif


<!-- En tu vista donde quieres mostrar el contenido -->
@if(session('usuario'))
@php
    $usuario = session('usuario');
    $esAlumno = false;

    // Obtener todos los roles asociados al usuario
    $rolesUsuario = $usuario->roles;

    // Verificar si alguno de esos roles es el rol de "Alumno"
    foreach ($rolesUsuario as $rol) {
        if ($rol->nombre === 'Administrador') {
            $esAlumno = true;
            break;
        }
    }
@endphp

@if($esAlumno)
    <h2>botones del admin</h2>
<!-- Botón para redirigir al índice de categoria -->
<a href="{{ route('categoria.index') }}" class="btn btn-primary">Ir a Categoría</a>

<!-- Botón para redirigir al índice de carrera -->
<a href="{{ route('carrera.index') }}" class="btn btn-primary">Ir a Carrera</a>

<!-- Botón para redirigir al índice de nombreGrupo -->
<a href="{{ route('nombreGrupo.index') }}" class="btn btn-primary">Ir a Nombre Grupo</a>

<!-- Botón para redirigir al índice de periodo -->
<a href="{{ route('periodo.index') }}" class="btn btn-primary">Ir a Periodo</a>

<!-- Botón para redirigir al índice de rol -->
<a href="{{ route('rol.index') }}" class="btn btn-primary">Ir a Rol</a>

<!-- Botón para redirigir al índice de permiso -->
<a href="{{ route('permiso.index') }}" class="btn btn-primary">Ir a Permiso</a>

<!-- Botón para redirigir al índice de extracurricular -->
<a href="{{ route('extracurricular.index') }}" class="btn btn-primary">Ir a Extracurricular</a>

<!-- Botón para redirigir al índice de tipoEvento -->
<a href="{{ route('tipoEvento.index') }}" class="btn btn-primary">Ir a Tipo Evento</a>

<!-- Botón para redirigir al índice de grupo -->
<a href="{{ route('grupo.index') }}" class="btn btn-primary">Ir a Grupo</a>

@endif
@endif


    
    
    </body>
</html>
