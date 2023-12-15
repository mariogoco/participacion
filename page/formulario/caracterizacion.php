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
<?php
include_once('../../app/config/config.php');
include_once($dirBase . '/controller/classes/user.php');
include_once($dirBase . '/controller/classes/session.php');
include_once($dirBase . '/layout/head.php');
$seccion = array('1', 'participación', 'Actores Participación');
?>

<body class="g-sidenav-show bg-gray-200">
    <!-- Menú lateral -->
    <?php include($dirBase . '/layout/sidebar.php'); ?>

    <!-- Contenido -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php include($dirBase . '/layout/navbar.php'); ?>

        <!-- Inicio del Formulario -->
        <div class="container-fluid py-4">
            <h1 class="text-capitalize text-center">Caracterización</h1>
            <hr class="dark horizontal my-4">
            <div class="row rounded m-3" style="background-color: white;">
                <?php
                if ($_SESSION['idRol'] == 1 || $_SESSION['idRol'] == 2) {
                ?>
                    <form class="px-3 my-5" action="<?= $appURL ?>/app/controller/formulario/comisorios/registro.php" method="POST" enctype="multipart/form-data" onsubmit="enviar.disabled = true; return true;">
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="input-group input-group-static mb-4">
                                    <label class="ms-0" for="asunto-comisorio"><strong>Asunto</strong><span style="color:red;"> *</span></label>
                                    <select id="asunto-comisorio" class="form-control" name="asunto-comisorio" required \>
                                        <option disabled="disabled" selected="selected" value="">Seleccione una opci&oacute;n</option>
                                        <?php
                                        // Consulta para obtener asuntos comisorio
                                        $sql = "SELECT id, nombre FROM asuntos_comisorio";
                                        $query = $pdo->prepare($sql);
                                        $query->execute();
                                        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                        ?><option value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center">Datos Solicitante</h4>
                        <hr class="dark horizontal my-3">
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="input-group input-group-static mb-4">
                                    <label for="entidad-solicitante"><strong>Entidad Solicitante</strong><span style="color:red;"> *</span></label>
                                    <input class="form-control" name="entidad-solicitante" id="entidad-solicitante" type="text" maxlength="200" placeholder="Escribe en este campo" required \>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center">Datos Solicitado</h4>
                        <hr class="dark horizontal my-3">
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="input-group input-group-static mb-4">
                                    <label for="nom-solicitado"><strong>Nombre Completo</strong></label>
                                    <input class="form-control" name="nom-solicitado" id="nom-solicitado" type="text" maxlength="200" placeholder="Escribe en este campo" \>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group input-group-static mb-4">
                                    <label for="tel-solicitado"><strong>Teléfono</strong></label>
                                    <input class="form-control" name="tel-solicitado" id="tel-solicitado" type="tel" maxlength="15" placeholder="Escribe en este campo" \>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="input-group input-group-static mb-4">
                                    <label class="ms-0" for="loc-solicitado"><strong>Barrio o Vereda</strong><span style="color:red;"> *</span></label>
                                    <select id="loc-solicitado" class="form-control" name="loc-solicitado" onchange="mostrarTerritorio(this.value)" required \>
                                        <option disabled="disabled" selected="selected" value="">Escribe el nombre y seleccione</option>
                                        <?php
                                        // Consulta para obtener localidades
                                        $sql = "SELECT id, nombre FROM localidades";
                                        $query = $pdo->prepare($sql);
                                        $query->execute();
                                        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                        ?><option value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group input-group-static mb-4">
                                    <label class="ms-0" for="ter-solicitado"><strong>Comuna o Corregimiento</strong><span style="color:red;"> *</span></label>
                                    <select id="ter-solicitado" class="form-control" name="ter-solicitado" required \>
                                        <option disabled="disabled" selected="selected" value="">Define el barrio o vereda</option>
                                        //* Se mostrará el territorio dependiendo de la localidad seleccionada por medio del script en Ajax
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="input-group input-group-static mb-4">
                                    <label for="dir-solicitado"><strong>Direcci&oacute;n Completa</strong><span style="color:red;"> *</span></label>
                                    <input class="form-control" name="dir-solicitado" id="dir-solicitado" type="text" maxlength="200" placeholder="Escribe en este campo" required>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center">Informaci&oacute;n Adicional</h4>
                        <hr class="dark horizontal my-3">
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="input-group input-group-static mb-4">
                                    <label for="motivo"><strong>Motivo de la Solicitud</strong><span style="color:red;"> *</span></label>
                                    <textarea class="form-control" name="motivo" id="motivo" rows="6" cols="30" maxlength="2500" placeholder="Escribe en este campo" required \></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="files align-items-center  mb-4">
                                    <label for="adjunto"><strong>Adjuntar Anexo</strong></label>
                                    <input type="file" class="form-control" name="adjunto" id="adjunto" accept="image/*, .pdf" \>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <strong>Autorización de tratamiento de datos personales:</strong>
                            <em>Tratamiento de Datos Personales
                                El registro de datos personales en este formato, autoriza a la Alcaldía de Dosquebradas para la
                                recolección, almacenamiento y uso de los mismo, en cumplimiento a la Ley 1581 / 12 y el
                                Decreto 1377 /13 y las demás normas que modifiquen, adicionen o complementen.</em>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="Si" id="datos-personales" name="datos-personales" required>
                                <label class="custom-control-label" for="datos-personales"><strong>Acepto.</strong><span style="color:red;"> *</span></label>
                            </div>
                        </div>
                        <div class="text-center my-4">
                            <button type="submit" name="enviar" class="button-fluid">Enviar Formulario</button>
                        </div>
                    </form>
                <?php
                } else {
                ?>
                    <div class="text-center col-xl-12 pt-4">
                        <h5>No tiene permisos para ver este contenido.</h5>
                        <a class="btn bg-gradient-primary mt-3" href="<?= $appURL ?>/index.php" type="button">Regresar</a>
                    </div>
                <?php
                }
                include('../../layout/mensaje-formularios.php'); ?>
            </div>

            <!-- Footer -->
            <?php include '../../view/footer.php'; ?>
        </div>
    </main>

    <!--   Core JS Files   -->
    <script>
        // Convierte la primera letra de cada palabra en mayúscula
        convertirPrimeraLetraMayuscula("entidad-solicitante");
        convertirPrimeraLetraMayuscula("nom-solicitado");
        convertirPrimeraLetraMayuscula("dir-solicitado");

        // Convierte la primera letra del campo tipo texto a mayúscula
        document.addEventListener("DOMContentLoaded", function() {
            const nombreInput = document.getElementById("motivo");

            nombreInput.addEventListener("input", function() {
                const inputValue = nombreInput.value;
                if (inputValue.length > 0) {
                    nombreInput.value = inputValue.charAt(0).toUpperCase() + inputValue.slice(1);
                }
            });
        });

        // Función para mostrar la comuna o corregimiento dependiendo de la localidad elegida
        function mostrarTerritorio(str) {
            if (str == "") {
                document.getElementById("ter-solicitado").innerHTML = "";
                return;
            }
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("ter-solicitado").innerHTML = this.responseText;
            }
            xhttp.open("GET", "<?= $appURL ?>/app/controller/lista/mostrar-territorio.php?q=" + str);
            xhttp.send();
        }

        // Agrega la funcionalidad de búsqueda a los campos de selección
        new TomSelect("#loc-solicitado", {
            create: false,
            sortField: {
                field: "text",
                direction: "asc"
            }
        });
    </script>

    <!-- Librerías complementarias -->
    <?php include '../../view/script.php'; ?>
</body>

</html>