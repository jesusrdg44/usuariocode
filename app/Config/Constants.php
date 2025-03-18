<?php
/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |---------------------------------------------------------------------------
 | Timing Constants
 |---------------------------------------------------------------------------
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2592000);
defined('YEAR')   || define('YEAR', 31536000);
defined('DECADE') || define('DECADE', 315360000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0);
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1);
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3);
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4);
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5);
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6);
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7);
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8);
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9);
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125);

/**
 * Constantes para la aplicación.
 */

// CONSTANTES PARA EL USUARIO (/InicioSesion)
define('RECURSO_USARIO_CSS', 'recursos_usuario/css');
define('RECURSO_USARIO_JS', 'recursos_usuario/js');
define('RECURSO_USARIO_VENDOR', 'recursos_usuario/vendor');
define('RECURSO_USARIO_FONTS', 'recursos_usuario/fonts');
define('RECURSO_USARIO_IMAGE', 'recursos_usuario/images');
define('RECURSO_USARIO_PLUGINS', 'recursos_usuario/plugins');

// CONSTANTES PARA EL PANEL (/dashboard)
define('RECURSO_PANEL_BUIDL', 'recursos_panel/build');
define('RECURSO_PANEL_DIST', 'recursos_panel/dist');
define('RECURSO_PANEL_DOCS', 'recursos_panel/docs');
define('RECURSO_PANEL_PAGES', 'recursos_panel/pages');
define('RECURSO_PANEL_PLUGINS', 'recursos_panel/plugins');

define('SUCCESS_ALERT', 'success');
define('WARNING_ALERT', 'warning');
define('INFO_ALERT', 'info');
define('ERROR_ALERT', 'error');

define('MASCULINO', 'M');
define('FEMENINO', 'F');

define('RECURSO_PANEL_IMG_PROFILES_USER', 'images/profile-user');

define('ESTATUS_HABILITADO', 'estatus_habilitado');
define('ESTATUS_DESABILITADO', 'estatus_deshabilitado');

// Tarea para el Dashboard (se utiliza "dashboard" para coincidir con el permiso)
define('TAREA_DASHBOARD', 'dashboard');

// Permisos según el rol
define('PERMISOS_ADMINISTRADOR', [
    'dashboard',
    'usuarios',
    'roles',
    'configuracion'
]);

define('PERMISOS_USUARIO', [
    'dashboard',
    'perfil'
]);

// Roles con sus claves (actualizamos el administrador a 745 para que coincida con la BD)
define('ROL_ADMINISTRADOR', [
    'clave' => 745,
    'nombre' => 'Administrador'
]);

define('ROL_OPERADOR', [
    'clave' => 125,
    'nombre' => 'Operador'
]);

define('ROL_USUARIO', [
    'clave' => 'USER',
    'nombre' => 'Usuario'
]);
