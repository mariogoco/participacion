<?php
class SesionUsuario
{
    // Constructor
    public function __construct()
    {
        session_start();
    }
    // Establecer sesión
    public function setCurrentUser($user)
    {
        $_SESSION['user'] = $user;
    }
    // Obtener usuario actual
    public function getCurrentUser()
    {
        return $_SESSION['user'];
    }
    // Cerrar sesión
    public function closeSession()
    {
        session_unset();
        session_destroy();
    }
}
