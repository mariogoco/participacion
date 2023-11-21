<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $appurl ?>/app/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= $appurl ?>/app/img/favicon.png">
    <title>
        Mi Alcaldía
    </title>
    <!-- Fuentes e íconos -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo íconos -->
    <link href="/public/template/material-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/public/template/material-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome íconos -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material íconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="/public/template/material-dashboard/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- CSS personalizado -->
    <link href="<?= $appURL ?>/assets/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- JS personalizado -->
    <script src="<?= $appURL ?>/assets/js/custom.js"></script>
    <!-- Librería sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Google Captcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body class="bg-gray-100">
    <div class="container position-sticky z-index-sticky top-0">        
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid ps-2 pe-0">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="<?= $appURL ?>/">
                            Mi Alcaldía
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="<?= $appURL ?>/">
                                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                        Iniciar Sesión
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-flex d-none">
                                <li class="nav-item d-flex align-items-center">
                                    <a class="btn btn-outline-dark btn-sm mb-0 me-2" target="_blank" href="https://www.dosquebradas.gov.co/">Sede Electrónica</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://www.dosquebradas.gov.co/web/images/prensa/comunicados/2023/02/comunicado__80.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Iniciar Sesión</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="../app/controller/login/ingreso.php" method="POST" onsubmit="enviar.disabled = true; return true;" id="login">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="ps-3 form-control" style="border: 1px solid #d2d6da;" id="user" name="user" placeholder="Escribe tu usuario" pattern="[a-z 0-9]{5,15}" autocomplete="on" required \>
                                        <label for="user" class="ms-3">Usuario</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="ps-3 form-control" style="border: 1px solid #d2d6da;" id="password" name="password" maxlength="20" placeholder="Escribe tu contraseña" required \>
                                        <label for="password" class="ms-3">Contraseña</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="button-fluid w-100 my-4 mb-2">Ingresar</button>
                                    </div>
                                    <!--<div class="text-center">
                    <button class="g-recaptcha button-fluid w-100 my-4 mb-2" data-sitekey="6LeIw-YgAAAAADiov73SBGvs9T09_ef9URFApMHN" data-callback='onSubmit' data-action='submit'>Ingresar</button>
                  </div>-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6 my-auto">
                            <div class="copyright text-center text-sm text-white text-lg-start">
                                © <script>
                                    document.write(new Date().getFullYear())
                                </script>, Dirección TIC -
                                <a href="https://www.dosquebradas.gov.co" class="font-weight-bold text-white" target="_blank">Alcaldía Municipal de Dosquebradas</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link pe-0 text-white" target="_blank">Template by Creative Tim</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="/public/template/material-dashboard/assets/js/core/popper.min.js"></script>
    <script src="/public/template/material-dashboard/assets/js/core/bootstrap.min.js"></script>
    <script src="/public/template/material-dashboard/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/public/template/material-dashboard/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

        var input = document.getElementById('user');
        input.oninvalid = function(event) {
            event.target.setCustomValidity('El nombre de usuario solo debe contener minúsculas y números. ej: johndoe5');
        }
    </script>
    <!-- Google Captcha -->
    <script>
        function onSubmit(token) {
            document.getElementById("login").submit();
        }
    </script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/public/template/material-dashboard/assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>