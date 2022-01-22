<?php
session_start(); //para que se pueda utilizar las variables de session $_SESSION
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventory System</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="vistas/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">

    <!--Considero que es una mala practicar meterlo aqui, pero bueno-->
    <!-- jQuery -->
    <script src="vistas/plugins/jquery/jquery.min.js"></script>


</head>
<!-- Site wrapper -->

<?php
if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

    echo '<body class="hold-transition sidebar-mini">';
    echo '<div class="wrapper">';
    include "modulos/navbar.php";

    /*=============================================
        Menu
    =============================================*/
    include "modulos/aside-menu.php";
    //Esto es gracias a url amigable en .htaccess, en vez de poner locahost/pos/inicio?ruta="inicio
    if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "usuarios" ||
            $_GET["ruta"] == "categorias" ||
            $_GET["ruta"] == "productos" ||
            $_GET["ruta"] == "clientes" ||
            $_GET["ruta"] == "ventas" ||
            $_GET["ruta"] == "crear-venta" ||
            $_GET["ruta"] == "reportes" ||
            $_GET["ruta"] == "salir") {
            include "modulos/" . $_GET["ruta"] . ".php";

        } else {
            include "modulos/404.php";
        }
    } else {
        include "modulos/inicio.php";
    }
    /*=============================================
        FOOTER
    =============================================*/
    include "modulos/footer.php";

    echo '</div>';
} else {
    echo '<body class="hold-transition sidebar-mini login-page">';
    include "modulos/login.php";
}
?>


<!--     Control Sidebar -->
<!--    <aside class="control-sidebar control-sidebar-dark">-->
<!--         Control sidebar content goes here -->
<!--    </aside>-->
<!--    < /.control-sidebar -->
<!--</div>-->
<!-- ./wrapper -->

<!--=======================================================-->

<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--SweetAlert2 -->
<script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="vistas/plugins/jszip/jszip.min.js"></script>
<script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
<script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="vistas/dist/js/demo.js"></script>-->
<!-- Page specific script -->
<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>

</body>
</html>
