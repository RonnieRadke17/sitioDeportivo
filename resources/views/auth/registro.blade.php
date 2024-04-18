<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Registro de Usuario</div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="paterno" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" id="paterno" name="paterno" required>
                            </div>
                            <div class="mb-3">
                                <label for="materno" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" id="materno" name="materno" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <details>
                                <summary>Soy estudiante</summary>
                                <div class="mb-3">
                                    <label for="matricula" class="form-label">Matrícula</label>
                                    <input type="text" class="form-control" id="matricula" name="matricula">
                                </div>
                                <div class="mb-3">
                                    <label for="carrera" class="form-label">Carrera</label>
                                    <select class="form-control" id="carrera" name="carrera">
                                        <option value="">Seleccione una carrera</option>
                                        @foreach($carreras as $carrera)
                                            <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </details>
                            <br>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
