<?php
include_once 'app/config/config.php';
include_once 'controller/classes/user.php';
include_once 'controller/classes/session.php';

$userSession = new SesionUsuario();
$user = new Usuario();

if (isset($_SESSION['user'])) {
    $user->setUser($userSession->getCurrentUser());
    include_once 'page/home.php';
} else if (isset($_POST['username']) && isset($_POST['password'])) {
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    $user = new Usuario();
    if ($user->userExists($userForm, $passForm)) {
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'page/home.php';
    } else {
        $_SESSION['tittle'] = "Credenciales Incorrectas";
        $_SESSION['message'] = "Nomrbre de usuario y/o contraseña incorrecta.";
        $_SESSION['icon'] = "error";
        include_once 'login/index.php';
    }
} else {
    include_once 'login/index.php';
}
