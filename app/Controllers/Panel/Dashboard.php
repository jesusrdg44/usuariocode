<?php
namespace App\Controllers\Panel;
use App\Controllers\BaseController;

class Dashboard extends BaseController {

    private $view = 'panel/dashboard';
    private $session = null;
    private $permiso = true;

    public function __construct() {
        $this->session = session();

        // Cargar el helper de permisos
        helper("permisos_roles");

        // Verificar el acceso usando el rol almacenado en la sesión
        if (!acceso_usuario(TAREA_DASHBOARD, $this->session->get('nombre_rol'))) {
            $this->permiso = false;
        }
        $this->session->tarea_actual = TAREA_DASHBOARD;
        // No sobrescribimos 'nombre_rol' para conservar el valor real (por ejemplo, 745 o 125)
    }

    private function load_data() {
        helper('message');
        $data = array();

        // Información específica de la página
        $data['nombre_pagina'] = 'Dashboard | Principal';
        $data['titulo_pagina'] = 'Usuarios';

        $data['nombre_usuarios'] = $this->session->get('nombre_usuarios');
        $data['ap'] = $this->session->get('ap_usuarios');
        $data['am'] = $this->session->get('am_usuarios');
        $data['imagen'] = ($this->session->get('imagen_usuarios') == null) 
            ? (($this->session->get('sexo_usuario') != MASCULINO) ? 'userf.png' : 'userm.png') 
            : $this->session->get('imagen_usuarios');
        $data['email_usuario'] = $this->session->get('email_usuario');

        // Configuración del breadcrumb
        $breadcrumb = array(
            array(
                'href' => route_to("dashboard"),
                'titulo' => 'Usuarios',
            ),
            array(
                'href' => '#',
                'titulo' => 'Usuario Nuevo',
            )
        );
        $data['breadcrumb_panel'] = breadcrumb_panel($data['titulo_pagina'], $breadcrumb);

        return $data;
    }

    private function create_view($name_view = '', $content = array()) {
        $content["menu_lateral"] = crear_menu_panel($this->session->tarea_actual);
        return view($name_view, $content);
    }

    public function index() {
        if ($this->permiso) {
            return $this->create_view($this->view, $this->load_data());
        } else {
            helper("message");
            // Mostrar alerta toastr indicando que no se tiene permiso
            \main_message('error', 'No tienes permiso de acceder', 'Error!');
            return redirect()->to(route_to("salir_admin"));
        }
    }
}
