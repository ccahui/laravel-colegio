<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layout')

@section('css-script')
<!--<script src="{{asset('js/angular1.7.js')}}"></script>
<script src="{{asset('appAngular/app.js')}}"></script>-->
<script src={{asset('js/eliminar.js')}}></script>
@endsection

@section('title',"{$grado->descripcion}")

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('alumnos.index') }}">Alumnos</a></li>
    <li class="breadcrumb-item active">Grado</li>
</ol>         
@endsection

@section('titulo',"Lista de Alumnos de {$grado->descripcion} ")

@section('contenido')
<div class='container'>
    <div>
        <div class="jumb">
            <div class="container-fluid">
                
                <button class='btn btn-outline-primary' id='seleccionar'>Seleccionar Todo</button>
                <a href='' class='btn btn-outline-danger' id='borrar'>Borrar</a>
                <button class="btn btn-outline-secondary" id="cancelar">Cancelar</button>
            </div>
        </div>
        <div class="row">
            @if(!empty($alumnos) && !$alumnos->isEmpty())
                <div class="table-responsive">
                <table class="table">
                    <thead class='thead-light'>
                        <tr>
                            <th><span>Codigo</span></th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alumnos as $alumno)
                        <tr>

                            <td><input type='checkbox' class='checkbox' name='borrarElementos'><span> {{$alumno->id}}</span></td>
                            <td>{{$alumno->nombre}}</td>
                            <td>{{$alumno->apellido}}</td>
                            <td>

                                <a href="{{ route('alumnos.ver',['id' => $alumno->id])}}" class='btn btn-link py-0'>Ver <i class="fas fa-eye"></i> </a>
                                <a href="{{ route('alumnos.editar',['id' => $alumno->id])}}" class='btn btn-link py-0 text-info'>Editar <i class="fas fa-edit"> </i></a>
                                <a href="" class="btn btn-link py-0 text-danger confirmar" ng-click="confirmar()">Eliminar <i class="fas fa-trash-alt"></i></a>
                            </td>   
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            @else
            <h6>No hay alumnos registrados</h6>
               @endif
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
