<?php
namespace App\Controllers\Panel;
use App\Controllers\BaseController;

class Dashboard extends BaseController{

    private $view='panel/dashboard';

    private function load_data(){
        helper('message');
        main_message('success', 'Esto es un ejemplo bienvenido', 'Hola!');
        $data = array();
        // Carga información o especifica
        $data['nombre_pagina'] = 'Dashboard | Principal';
        $data['titulo_pagina'] = 'Usuarios';

        // Breadcrumb
            //arreglo grande
        $breadcrumb = array(
                //arreglo pequeño
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

        // Queries SQL

        return $data;
    }// end load_data

    private function create_view($name_view = '', $content = array()){
        $content["menu_lateral"] = crear_menu_panel();
        return view($name_view , $content);
    }// end create_view

    public function index(){           
        return $this->create_view($this->view, $this->load_data());
        //return view('welcome_message');
    }// end index
    

}//end Dasboard
