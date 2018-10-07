<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layout')

@section('css-script')
<script src="{{asset('js/angular1.7.js')}}"></script>
<script src="{{asset('appAngular/app.js')}}"></script>
<script src={{asset('js/eliminar.js')}}></script>
@endsection

@section('title','Alumnos del Primer Grado')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
    <li class="breadcrumb-item"><a href="alumnos.html">Alumnos</a></li>
    <li class="breadcrumb-item active">Grado</li>
</ol>         
@endsection

@section('Titulo','Alumnos de Primer Grado')

@section('contenido')
<div class='container' ng-app='miApp'>
    <div  ng-controller="AlumnosCtrol">
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
</div>
    @endsection
