<?php
if ((isset($_SESSION['message'])) && (isset($_SESSION['icon'])) && (isset($_SESSION['tittle']))) {
    $respuesta = $_SESSION['message'];
    $icono = $_SESSION['icon'];
    $titulo = $_SESSION['tittle'];
?>
    <script>
        Swal.fire({
            position: 'center',
            icon: '<?= $icono; ?>',
            title: '<h2><?= $titulo; ?></h2>',
            html: '<?= $respuesta; ?>',
            showConfirmButton: true,
        })
    </script>
<?php
    unset($_SESSION['message']);
    unset($_SESSION['tittle']);
    unset($_SESSION['icon']);
}
?>