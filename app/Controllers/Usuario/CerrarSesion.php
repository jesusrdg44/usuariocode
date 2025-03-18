<?php
namespace App\Controllers\Usuario;
use App\Controllers\BaseController;

class CerrarSesion extends BaseController {

    public function index() {
        $session = session();
        $session->destroy(); // Destroy the session
        return redirect()->to('/login'); // Redirect to the login page
    }
}
?>
