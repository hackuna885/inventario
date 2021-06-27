<?php
require_once "seguridad.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #################### Experimental borrar cache #################### -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0"/>
    <!-- #################### Experimental borrar cache #################### -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/vue.js"></script>
    <script src="../js/vue-router.js"></script>
    <script src="../js/vuex.js"></script>
    <title>Control Teléfonos - Dragones</title>
    <style>
        input[type="text"]{
            text-transform:uppercase;
        }
        input::-webkit-input-placeholder {
        text-transform:none;
        }
        input:-moz-placeholder {
        text-transform:none;
        }
        input:-ms-input-placeholder {
        text-transform:none;
        }
        line-heigth {
        padding: 0px;
        }
        .sinMargenButon{
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
    <div class="container-fluid" id="app">
    <!-- <div class="container-fluid" id="app" oncontextmenu='return false'> -->
        <router-view></router-view>              
    </div>
    
    <script src="../js/jquery.min.js"></script>
    <script src="../js/axios.min.js"></script>
    <script src="../js/sweetalert2.js"></script>
    <script src="../js/main-home.js"></script>
    <script src="../components/Buscador.js"></script>
    <script>
        app.use(store);
        app.use(router)
        app.mount("#app")
    </script>
</body>
</html>