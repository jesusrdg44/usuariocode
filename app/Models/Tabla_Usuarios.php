<?php
namespace App\Models;
use CodeIgniter\Model;

class Tabla_Usuarios extends Model {
    protected $table = 'usuarios';
    protected $primaryKey = 'IdUsuario';    
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = [
        'estatus_usuarios', 
        'nombre_usuarios', 
        'ap_usuarios', 
        'am_usuario', 
        'sexo_usuario', 
        'email_usuario',
        'password_usuario',
        'imagen_usuario',
        'IdRol'
    ];

    public function createUser($data = array()){
        if ($data != null) {
            $this->insert($data);
            return $this->insertID();
        }
        return false;
    }

    public function getUserById($id){
        return $this->where('IdUsuario', $id)->first();
    }

    public function getUserByUserName($username){
        return $this->where('email_usuario', $username)->first();
    }

    public function getAllUsers(){
        return $this->findAll();
    }

    /**
     * Verifica al usuario uniendo la tabla 'usuarios' con 'roles'.
     * Se retorna 'r.IdRol' como 'nombre_rol' para usarlo en la verificación de permisos.
     */
    public function verificarUsuario($username = null, $pass = null) {
        return $this->select('u.IdUsuario, u.nombre_usuarios, u.ap_usuarios, u.am_usuario, u.email_usuario, u.estatus_usuarios, u.password_usuario, u.sexo_usuario, u.imagen_usuario, r.IdRol as nombre_rol')
                    ->from($this->table . ' AS u')
                    ->join('roles r', 'r.IdRol = u.IdRol')
                    ->where('u.email_usuario', $username)
                    ->where('u.password_usuario', $pass)
                    ->first();
    }
 
    public function updateUser($id, $data = array()){
        if ($data != null) {
            $this->update($id, $data);
            return true;
        }
        return false;
    }
}
