<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
        <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
        <script src="{{asset('js/angular1.7.js')}}"></script>
        <script src="{{asset('appAngular/app.js')}}"></script>
         <script src="{{asset('js/eliminar.js')}}"></script>
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

    <body ng-app="miApp">
        
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" >

            <a href="../" class="navbar-brand ml-md-3">
                <strong> Inicio</strong>
            </a>
            <a href="" class="navbar-brand ">
                <strong>Alumno</strong>
            </a>
            <a href="alumnos.html" class="navbar-brand ">
                <strong>GRADO</strong>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#contenidoNav3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- mr - auto Coloca todo hacia la Izquierda-->
            <div class="collapse navbar-collapse" id="contenidoNav3">
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
                        <li class="breadcrumb-item active">Grado</li>
                    </ol>         
                </div>
            </div>
        </div>
        <div class="container" ng-controller="AlumnosCtrol">
            <div class="jumb">
                <div class="container-fluid">
                    <h2 class="font-weight-bold">Alumnos de Grado X</h2>
                    
                    <button class='btn btn-outline-primary' id='seleccionar'>Seleccionar Todo</button>
                    <a href='' class='btn btn-outline-danger' id='borrar'>Borrar</a>
                    <button class="btn btn-outline-secondary" id="cancelar">Cancelar</button>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead class='thead-light'>
                            <tr>
                                <th><span ng-click="ordenar = 'id'; reverso = !reverso">Codigo</span></th>
                                <th ng-click="ordenar = 'nombre'; reverso = !reverso">Nombre</th>
                                <th ng-click="ordenar = 'apellidos'; reverso = !reverso">Apellido</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr ng-repeat="alumno in alumnos | orderBy:ordenar:reverso">

                                <td><input type='checkbox' class='checkbox' name='borrarElementos'> <span ng-bind='alumno.id'> </span></td>
                                <td ng-bind='alumno.nombre'></td>
                                <td ng-bind='alumno.apellidos'></td>
                                <td>
                                    
                                    <a href='ver-1' class='btn btn-link py-0'>Ver <i class="fas fa-eye"></i> </a>
                                    <a href='editar-1' class='btn btn-link py-0 text-info'>Editar <i class="fas fa-edit"> </i></a>
                                    <a href="" class="btn btn-link py-0 text-danger confirmar" ng-click="confirmar()">Eliminar <i class="fas fa-trash-alt"></i></a>
                                </td>   
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="container text-center">
            <div class="d-inline-block">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a href="Bootstrap.html" class="page-link">
                            &laquo;
                        </a>
                    </li>
                    <li class="page-item active"><a href="alumnos-grado.html" class="page-link">1</a></li> 
                    <li class="page-item"><a href="alumnos-grado.html" class="page-link">2</a></li> 
                    <li class="page-item"><a href="alumnos-grado.html" class="page-link">3</a></li> 
                    <li class="page-item"><a href="alumnos-grado.html" class="page-link">4</a></li> 
                    <li class="page-item">
                        <a href="alumnos-grado.html" class="page-link">
                            &raquo;
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>
