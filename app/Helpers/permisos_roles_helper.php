<?php

use App\Models\Permisos_Roles;

function acceso_usuario($tarea_actual = "", $rol_actual = "") {
    $permiso = false;

    switch ($rol_actual) {
        case ROL_ADMINISTRADOR["clave"]:
            // El administrador tiene acceso si la tarea se encuentra en sus permisos.
            $permiso = in_array($tarea_actual, PERMISOS_ADMINISTRADOR);
            break;

        case ROL_OPERADOR["clave"]:
            // El operador no tiene permisos para acceder al dashboard.
            $permiso = false;
            break;

        case ROL_USUARIO["clave"]:
            // Verificar permisos para el rol de usuario.
            $permiso = in_array($tarea_actual, PERMISOS_USUARIO);
            break;

        default:
            $permiso = false;
            break;
    }

    return $permiso;
}
