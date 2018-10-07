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
            <a href="alumnos-grado.html" class="navbar-brand ">
                <strong>Grado</strong>
            </a>
            <a href="ver.blade.html" class="navbar-brand ">
                <strong>VER</strong>
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
                    <li class="breadcrumb-item"><a href="alumnos-grado.html">Grado</a></li>
                    <li class="breadcrumb-item active">Ver</li>
                </ol>         
            </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xl-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                
                                <img src="{{asset('images/foto.jpg')}}" class="thumbnail  mr-3 align-self-center" style='width:120px' >
                                <div class="media-body ml-3">
                                    <form>
                                        <div class="form-group form-row">
                                            <label class="col-sm-3 col-form-label font-weight-bold"> DNI</label>
                                            <div class="col-sm-9"> 
                                                <input placeholder="Ingrese el DNI" class="form-control-plaintext" readonly value="712353535">
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                            <label class="col-sm-3 col-form-label font-weight-bold">Nombre</label>
                                            <div class="col-sm-9"> 
                                                <input placeholder="Ingrese los nombre completos" class="form-control-plaintext" readonly  value="anonimo">
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                            <label class="col-sm-3 col-form-label font-weight-bold">Apellidos</label>
                                            <div class="col-sm-9"> 
                                                <input placeholder="Ingrese los apellidos" class="form-control-plaintext" readonly  value="anonimo">
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                            <label class="col-sm-3 col-form-label font-weight-bold">Edad</label>
                                            <div class="col-sm-9"> 
                                                <input placeholder="Ingrese su gmail" class="form-control-plaintext" readonly  value="x">
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                            <label class="col-sm-3 col-form-label font-weight-bold">Grado</label>
                                            <div class="col-sm-9">
                                               <input placeholder="Ingrese su gmail" class="form-control-plaintext" readonly  value="Tercer Grado">
                                            </div>
                                        </div>
                                    </form>
                                    <a href="alumnos-grado.html" class="btn btn-outline-info"><i class="fas fa-arrow-circle-left"></i>
                                    Regresar </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </body>
</html>