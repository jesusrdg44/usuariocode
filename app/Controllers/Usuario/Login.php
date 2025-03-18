<?php
namespace App\Controllers\Usuario;
use App\Models\Tabla_Usuarios;
use App\Controllers\BaseController;

class Login extends BaseController {

    public function index() {
        helper('message');
        return view('usuario/inicio', [
            'nombre_pagina' => 'Login',
            'titulo_pagina' => 'Iniciar Sesión'
        ]);
    }

    public function hola() {

        $model = new Tabla_Usuarios();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('pass');
        
        // Verificar el usuario con la contraseña hasheada
        $user = $model->verificarUsuario($email, hash("SHA256", $password));    

        if ($user != null) {
            $session = session();
            // Asignar los datos a la sesión. 'nombre_rol' se asigna con el valor obtenido (por ejemplo, 745 o 125)
            $session->set([
                'IdUsuario'       => $user['IdUsuario'],
                'nombre_usuarios' => $user['nombre_usuarios'],
                'ap_usuarios'     => $user['ap_usuarios'],
                'am_usuarios'     => $user['am_usuario'], 
                'email_usuario'   => $user['email_usuario'],
                'imagen_usuarios' => $user['imagen_usuario'], 
                'estatus_usuarios'=> $user['estatus_usuarios'],
                'sexo_usuario'    => $user['sexo_usuario'],
                'nombre_rol'      => $user['nombre_rol'],
                'isLoggedIn'      => true
            ]);
            
            // Si el usuario está deshabilitado se redirige al login
            if ($user['estatus_usuarios'] == 0) {
                helper('message');
                main_message('warning', "Este usuario ha sido desabilitado " . $user['nombre_usuarios'], 'Lo sentimos');
                return redirect()->to('/login');
            }
            
            helper('message');
            main_message('info', "Bienvenido al panel de administración <br>" . $user['nombre_usuarios'], 'Estas en el dashboard!');
            return redirect()->to('/dashboard');
        } else {
            helper('message');
            main_message('error', 'Usuario o contraseña incorrectos', 'Error!');
            return redirect()->to('/login');
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
