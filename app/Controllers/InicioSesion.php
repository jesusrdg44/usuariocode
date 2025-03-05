<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class InicioSesion extends BaseController{

    private $view='usuario/inicio';

    private function load_data(){
        $data = array();
        // Carga información o especifica
        $data['nombre_pagina'] = 'InicioSesion';
        $data['titulo_pagina'] = 'Actividad de video';
        // Queries SQL

        return $data;
    }// end load_data

    private function create_view($name_view = '', $content = array()){
        return view($name_view , $content);
    }// end create_view

    /*private function make_view($name_view = '', 
                                $content = array()){

        //return view($view, $content);
    }// end make_view

    */
    public function index(){
        return $this->create_view($this->view, $this->load_data());
        //return view('welcome_message');
    }// end index
    

}//end Dasboard
