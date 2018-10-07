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
        <link  rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
        <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
        
        <style>
            .jumb {
                padding: 1rem 1rem;
                margin-bottom: 1rem;
            }

            @media (min-width: 576px) {
                .jumb {
                    padding: 1rem 2rem;
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
                <strong>Alumno</strong>
            </a>
            <a href="alumnos-crear.html" class="navbar-brand ">
                <strong>CREAR</strong>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#contenidoNav3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- mr - auto Coloca todo hacia la Izquierda-->
            <div class="collapse navbar-collapse" id="contenidoNav3">
                <!-- ml-auto Coloca todo hacia la derecha
                <a href="alumno-agregar.html" class="navbar-brand ">
                    <strong>Registrar</strong>
                </a>-->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link active font-weight-bold">Cerrar Session <i class="fas fa-sign-out-alt"></i></a>
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
                        <li class="breadcrumb-item"><a href="alumnos.html">Alumnos</a></li>
                        <li class="breadcrumb-item active">Crear</li>
                    </ol>         
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                    <div class="text-center">
                        <h3>Crear un Alumno</h3>
                    </div>
                    <br>
                    <form>
                        <div class="form-group form-row">
                            <label class="col-sm-3 col-form-label font-weight-bold">DNI</label>
                            <div class="col-sm-9"> 
                                <input placeholder="Ingrese el DNI" class="form-control">
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Nombres</label>
                            <div class="col-sm-9"> 
                                <input placeholder="Ingrese los nombre completos" class="form-control">
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Apellidos</label>
                            <div class="col-sm-9"> 
                                <input placeholder="Ingrese los apellidos" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Edad</label>
                            <div class="col-sm-9"> 
                                <input placeholder="Ingrese su gmail" class="form-control">
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Grado</label>
                            <div class="col-sm-9">
                            <select class="form-control">
                                <option>Primer Grado</option>
                                <option>Segundo Grado</option>
                                <option>Tercer Grado</option>
                                <option>Cuarto Grado</option>
                                <option>Quinto Grado</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Foto</label>
                            <input type="file" class="form-control-file"> 
                        </div>
                        <div>
                                <a href="alumnos.html" class="btn btn-outline-primary btn-block"> Guardar <i class="fas fa-save"></i></a>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </body>
</html>
