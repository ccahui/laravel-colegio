<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ALUMNOS | Colegio ABC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/all.min.js"></script>
        <style>
            .jumb {
                padding: 1rem 1rem;
                margin-bottom: 1rem;
            }

            @media (min-width: 576px) {
                .jumb {
                    padding: 1rem 1rem;
                }
            }
        </style>
    </head>

    <body>


        <nav class="navbar navbar-expand-md navbar-dark bg-dark" >

            <a href="index.html" class="navbar-brand ml-md-3">
                <strong> Inicio</strong>
            </a>
            <a href="alumnos.html" class="navbar-brand ">
                <strong>ALUMNO</strong>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#contenidoNav3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- mr - auto Coloca todo hacia la Izquierda-->
            <div class="collapse navbar-collapse" id="contenidoNav3">
                <!-- ml-auto Coloca todo hacia la derecha -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link active font-weight-bold">Cerrar Sesión <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item active">Alumnos</li>
                    </ol>
                    <h4 class="mx-2"><a href="alumnos-crear.html"><i class="fas fa-plus-circle icono"></i> Crear Alumno </a></h4>
                </div>
            </div>
            <div class="container">
                <div class="jumb">
                    <div class="container-fluid">
                        <h2 class="font-weight-bold">Registro de Grado del Colegio</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-md-6 col-xl-5">
                        <div class="btn-group btn-group-vertical btn-block">
                          <?php 
                            dd(empty($grados))
                          ?>
                            <?php foreach ($grados as $grado ):?>
                            <a href= "alumnos-grado.html" class="btn btn-outline-secondary "><?php echo e($grado) ?></a>    
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>

    </body>
</html>
