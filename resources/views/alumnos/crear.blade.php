<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layout')

@section('title','Crear Alumno')

@section('breadcrumb')

            <!-- mr - auto Coloca todo hacia la Izquierda-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="alumnos.html">Alumnos</a></li>
                        <li class="breadcrumb-item active">Crear</li>
                    </ol>         
@endsection

@section('contenido')
                <div class="col-md-7 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                    <div class="text-center">
                        <h3 class='font-weight-bold'>Crear un Alumno</h3>
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
@endsection
