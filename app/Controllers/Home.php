<?php
namespace App\Controllers;
class Home extends BaseController
{
    /**
     * How to declare a function
     * [ma] function name(arguments){
     *      //Stament
     *      return ;
     * }
     */

    // definir la funcion pricipal
    //Main function : index
    public function index()
    {
        // load a view
        return view('welcome_message');
    }

    public function example(){
        //Show a string
        echo "It's working";

        // calling an anther method
        //  return $this->index();
    }
}
