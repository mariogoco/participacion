<?php
include_once 'controller/classes/user.php';
include_once 'controller/classes/session.php';

$userSession = new SesionUsuario();
$user = new Usuario();

if(isset($_SESSION['user'])){    
    $user->setUser($userSession->getCurrentUser());
    include_once 'views/home.php';
}else if(isset($_POST['username']) && isset($_POST['password'])){    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    $user = new Usuario();
    if($user->userExists($userForm, $passForm)){        
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'views/home.php';
    }else{        
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'views/login.php';
    }
}else{    
    include_once 'login/index.php';
}
