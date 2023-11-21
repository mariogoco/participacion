<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="libs/css/style.css" rel="stylesheet" type="text/css" />
    <title>Formulario de Caracterización</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/apps/caracterizacion/index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0)">Formularios</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/apps/caracterizacion/views/formulario1.php">Formulario 1</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Formulario 2</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Formulario 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $appURL ?>/controller/session/logout.php">Cerrar Sesión</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" id="buscar" type="text" placeholder="Buscar">
                        <button class="btn btn-light" id="buscar" type="button">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
        <section>
            <div class="formulario">
                <h1>Bienvenido <?= $user->getNombre();  ?></h1>
            </div>
        </section>
    </div>
</body>

</html>