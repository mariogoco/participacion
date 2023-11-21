<?php
include_once '../../app/config/config.php';
include_once ($dirBase . '/controller/classes/session.php');
$userSession = new SesionUsuario();
$userSession->closeSession();
header('Location: ' . $appURL . '/index.php');
