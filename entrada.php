<?php 
require_once "class/Horario.php";
require_once "class/Empleado.php";
$listadoHorario= Horario::obtenerTodos();
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
    <title>Registro de Entrada</title>

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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="static/CoolAdmin/static/CoolAdmin/images/icon/logo-up.png" alt="Paladin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="modulos/empleados/marcarEntrada.php" method="post">
                                <div class="form-group">
                                    <label>Dni</label>
                                    <input type="text" id="txtNumeroDocumento" name="txtNumeroDocumento" placeholder="Ingrese numro de documento" class="au-input au-input--full">
                                </div>
                                <div class="col-12 col-md-9">
                                    <select type="time" name="cboHorario" id="cboHorario" class="form-control">
                                        <option value="0">Seleccione su turno</option>
                                        <?php foreach ($listadoHorario as $horario): ?>
                                            <option value="<?php echo $horario->getIdHorario(); ?>">
                                                <?php echo $horario ; ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <br><br>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Marcar Entrada</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

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