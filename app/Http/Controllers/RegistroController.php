<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Usuario_roles;
use App\Models\Roles;
use App\Models\Carrera;
use App\Models\Detalles_Rol;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function showRegistrationForm()
    {
        $data['carreras'] = Carrera::all();
        return view('auth.registro',$data);
    }

    public function register(Request $request)
    {
        // Validar los datos del formulario de registro
        /*$request->validate([
            'nombre' => 'required|string|max:255',
            'paterno' => 'required|string|max:255',
            'materno' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);*/

        // Crear un nuevo usuario
        $usuario = Usuario::create([
            'nombre' => $request->nombre, 
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'correo' => $request->correo,
            'password' => $request->password,
            //'password' => Hash::make($request->password),
        ]);

        $idRolExterno = 4; // Suponiendo que el rol "Externo" tiene el ID 4

        if($request->matricula != null && $request->carrera != null){//significa que es alumno
            //aqui insertamos los datos adicionales del rol alumno de la tabla Detalles_Rol
            Detalles_Rol::create([
                'Usuario_id' => $usuario->id,
                'Roles_id' => 2,//id del rol de alumno
                'matricula' => $request->matricula,
                'Carrera_id' => $request->carrera,
            ]);

            //aqui insertamos el rol de alumno en la tabla Usuario_roles
            Usuario_roles::create([
                'Usuario_id' => $usuario->id,
                'Roles_id' => 2,//id del rol de alumno
            ]);


        }else{//aqui asignamos que el usr su rol es externo
            Usuario_roles::create([
                'Usuario_id' => $usuario->id,
                'Roles_id' => $idRolExterno,
            ]);
        }
        
        //Todos pueden iniciar como externo o como alumno pero solo pueden tener un rol
        //ya adentro tendrian que poder cambiar su rol los externos en caso de que se equivocaran
        // Redirigir al usuario después del registro
        return redirect('/')->with('success', '¡Registro exitoso! Ahora puedes iniciar sesión.')->with('usuario', $usuario);
    }

}
