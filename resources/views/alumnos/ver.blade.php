<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layout')

@section('title','Detalles del Alumno 1')

@section('breadcrumb')
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="alumnos.html">Alumnos</a></li>
                    <li class="breadcrumb-item"><a href="alumnos-grado.html">Grado</a></li>
                    <li class="breadcrumb-item active">Ver</li>
                </ol>         
@endsection

@section('contenido')
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

@endsection