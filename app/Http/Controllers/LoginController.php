<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   // Método para mostrar el formulario de login
   public function showLoginForm()
   {
       return view('auth.login');
   }

   // Método para procesar la autenticación del usuario
   public function loginUser(Request $request)
   {
       // Validar los datos del formulario
       $request->validate([
        'correo' => 'required|email',
        'password' => 'required',
    ]);

    // Buscar al usuario por su correo electrónico y contraseña
    $usuario = Usuario::where('correo', $request->correo)
                       ->where('password', $request->password)
                       ->first();

    // Verificar si se encontró un usuario
    if ($usuario) {
        // Si se encuentra el usuario, puedes iniciar sesión y redirigir al usuario
        // Implementa tu lógica de sesión aquí
        return redirect('/')->with('success', 'Inicio de sesión exitoso')->with('usuario', $usuario);
    } else {
        // Si no se encuentra el usuario, redirigir de vuelta al formulario de login con un mensaje de error
        return redirect()->back()->withInput()->withErrors(['correo' => 'Las credenciales proporcionadas son incorrectas']);
    }
   }

   // Método para cerrar sesión del usuario
   public function logout()
   {
       Auth::logout();

       return redirect('/');
   }
}
