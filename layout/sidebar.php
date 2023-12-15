    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="<?= $appURL ?>/index.php" target="_SELF">
                <img src="<?= $appURL ?>/app/img/logo-alcaldia-black.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Caracterizaci&oacute;n de Ciudadanos</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white <?php if ($seccion[0] == '0') { ?> active bg-gradient-primary <?php } ?>" href="<?= $appURL ?>/index.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Panel de Inicio</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Formularios</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?php if ($seccion[0] == '2') { ?> active bg-gradient-primary <?php } ?>" href="<?= $appURL ?>/page/formulario/caracterizacion.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">edit_note</i>
                        </div>
                        <span class="nav-link-text ms-1">Actores Participaci&oacute;n</span>
                    </a>
                </li>
                <hr class="light horizontal my-2">
                <li class="nav-item">
                    <a class="nav-link text-white <?php if ($seccion[0] == '1') { ?> active bg-gradient-primary <?php } ?>" href="<?= $appURL ?>/page/consultas">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">search</i>
                        </div>
                        <span class="nav-link-text ms-1">Consultas</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn btn-outline-success mt-4 w-100" href="" type="button"><span><?= $user->username ?></span></a>
                <a class="btn bg-gradient-primary w-100" href="<?= $appURL ?>/controller/sesion/logout.php" type="button">Cerrar Sesión</a>
            </div>
        </div>
    </aside>