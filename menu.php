<?php

require_once "class/Usuario.php";

session_start();

if (!isset($_SESSION['usuario'])) {
	header('location: formulario_login.php');
}

$usuario = $_SESSION['usuario'];

$imagen = $usuario->getImagenPerfil();
if (is_null($imagen)){
    $imagen = "sinfoto.jpg";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="static/CoolAdmin/css/font-face.css" rel="stylesheet" media="all">
    <link href="static/CoolAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="static/CoolAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="static/CoolAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="static/CoolAdmin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="static/CoolAdmin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="static/CoolAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="static/CoolAdmin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="static/CoolAdmin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="static/CoolAdmin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="static/CoolAdmin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="static/CoolAdmin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="static/CoolAdmin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="static/CoolAdmin/images/icon/logo-up.png" alt="Paladin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="/PaladinC/modulos/usuarios/listado.php">
                                <i class="fas fa-table"></i>Usuarios</a>
                        </li>
                        <li>
                            <a href="/PaladinC/modulos/funciones/listado.php">
                                <i class="fas fa-table"></i>Funciones</a>
                        </li>
                        <li>
                            <a href="/PaladinC/modulos/modulos/listado.php">
                                <i class="fas fa-table"></i>Modulos</a>
                        </li>
                        <li>
                            <a href="/PaladinC/modulos/perfiles/listado.php">
                                <i class="fas fa-table"></i>Perfiles</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="static/CoolAdmin/images/icon/logo-up.png" alt="Paladin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="/PaladinC/modulos/productos/listado.php">
                                <i class="fas fa-table"></i>Productos</a>
                        </li>
                        <li>
                            <a href="/PaladinC/modulos/usuarios/listado.php">
                                <i class="fas fa-table"></i>Usuarios</a>
                        </li>
                        <li>
                            <a href="/PaladinC/modulos/funciones/listado.php">
                                <i class="fas fa-table"></i>Funciones</a>
                        </li>
                        <li>
                            <a href="/PaladinC/modulos/modulos/listado.php">
                                <i class="fas fa-table"></i>Modulos</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Buscar..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="/PaladinC/imagenes/<?php echo $imagen;?>">
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $usuario ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="/PaladinC/imagenes/<?php echo $imagen;?>">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $usuario->getUsername();?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $usuario->getNombre();?> <?php echo $usuario->getApellido();?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="/PaladinC/modulos/usuarios/detalle.php">
                                                        <i class="zmdi zmdi-account"></i>Cuenta</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="/PaladinC/modulos/usuarios/modificar.php">
                                                        <i class="zmdi zmdi-settings"></i>Modificar</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/PaladinC/logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
        <!-- END MENU SIDEBAR-->
        <!-- Jquery JS-->
    <script src="static/CoolAdmin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="static/CoolAdmin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="static/CoolAdmin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="static/CoolAdmin/vendor/slick/slick.min.js">
    </script>
    <script src="static/CoolAdmin/vendor/wow/wow.min.js"></script>
    <script src="static/CoolAdmin/vendor/animsition/animsition.min.js"></script>
    <script src="static/CoolAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="static/CoolAdmin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="static/CoolAdmin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="static/CoolAdmin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="static/CoolAdmin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="static/CoolAdmin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="static/CoolAdmin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="static/CoolAdmin/js/main.js"></script>
</body>
</html>
<!-- END MENU SIDEBAR-->