<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>@yield('title') - Colegio ABC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
        <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
        @yield('css-script')
        <style>
            .jumb {
                margin-bottom:1rem 
        </style>
    </head>

    <body>


        <nav class="navbar navbar-expand-md navbar-dark bg-dark" >

            <a href="index.html" class="navbar-brand ml-md-3">
                <strong> Inicio</strong>
            </a>
            <a href="alumnos.html" class="navbar-brand">
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
                    @yield('breadcrumb')
                </div>
            </div>
            
            <div class="container">
                <div class='jumb'>
                    <div class="container-fluid">
                        <h3 class="font-weight-bold">@yield('titulo')</h3>
                    </div>
                </div>
                <div class="row">
                        @yield('contenido')
                </div>
            </div>
            <br>
        </div>

    </body>
</html>
