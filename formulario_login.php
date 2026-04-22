<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="imagenes/png" href="static/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="static/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="static/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/css/util.css">
    <link rel="stylesheet" type="text/css" href="static/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="modulos/usuarios/procesar/login.php">
                    <span class="login100-form-title p-b-43">
                        Iniciar Sesion
                    </span>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate = "Debe ingrasar el nombre de usuario">
                        <input class="input100" type="text" name="txtUsername">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Usuario</span>
                    </div>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate="Debe Ingresar la contraseña">
                        <input class="input100" type="password" name="txtPassword">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Contraseña</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Recordar usuario
                            </label>
                        </div>
                    </div>
            

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Ingresar
                        </button>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('imagenes/Fondo.png');">
                </div>
            </div>
        </div>
    </div>
    
    

    
    
<!--===============================================================================================-->
    <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="static/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="static/vendor/bootstrap/js/popper.js"></script>
    <script src="static/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="static/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="static/vendor/daterangepicker/moment.min.js"></script>
    <script src="static/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="static/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="static/js/main.js"></script>

</body>
</html>