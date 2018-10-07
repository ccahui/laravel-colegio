<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layout')

@section('title','Editar Alumno 1')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
    <li class="breadcrumb-item"><a href="alumnos.html">Alumnos</a></li>
    <li class="breadcrumb-item"><a href="alumnos-grado.html">Grado</a></li>
    <li class="breadcrumb-item active">Editar</li>
</ol>         
@endsection

@section('contenido')
<div class="col-md-7 col-xl-5">
    <div class="card">
        <div class="card-body">

            <div class="media container">
                <div class="row align-items-center">

                    <img src="{{asset('images/foto.jpg')}}" class="thumbnail  mr-3 align-self-center" style='width:120px' >
                    <div class="media-body ml-3">
                        <h3>Editar Alumno</h3>
                    </div>
                </div>
            </div>

            <br>
            <form>
                <div class="form-group form-row">
                    <label class="col-sm-3 col-form-label"> DNI</label>
                    <div class="col-sm-9"> 
                        <input placeholder="Ingrese el DNI" class="form-control" value="712353535">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-3 col-form-label">Nombre</label>
                    <div class="col-sm-9"> 
                        <input placeholder="Ingrese los nombre completos" class="form-control" value="anonimo">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-3 col-form-label">Apellidos</label>
                    <div class="col-sm-9"> 
                        <input placeholder="Ingrese los apellidos" class="form-control" value="anonimo">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-3 col-form-label">Edad</label>
                    <div class="col-sm-9"> 
                        <input placeholder="Ingrese su gmail" class="form-control" value="x">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-3 col-form-label">Grado</label>
                    <div class="col-sm-9">
                        <select class="form-control">
                            <option>Primer Grado</option>
                            <option>Segundo Grado</option>
                            <option selected>Tercer Grado</option>
                            <option>Cuarto Grado</option>
                            <option>Quinto Grado</option>
                        </select>
                    </div>
                </div>
                <div class="btn-group    w-100 form-row">
                    <a href="alumnos-grado.html" class="btn btn-outline-danger btn-group col-sm-6 d-inline-block text-center"> Cancelar </a>
                    <a href="alumnos-grado.html" class="btn btn-outline-primary btn-group col-sm-6 d-inline-block text-center" id='confirmar'> Guardar <i class="fas fa-save"></i></a>
                </div>

            </form>
        </div>
    </div>  
</div>

@endsection
