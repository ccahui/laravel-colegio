<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layout')

@section('title',"Detalles del Alumno $alumno->id")

@section('breadcrumb')
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('alumnos.index')}}">Alumnos</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('alumnos.grado', ['id' => $alumno->grado_id]) }}">Grado</a></li>
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
                                            <label class="col-sm-3 col-form-label font-weight-bold"> ID</label>
                                            <div class="col-sm-9"> 
                                                <input class="form-control-plaintext" readonly value="{{ $alumno->id }}">
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                            <label class="col-sm-3 col-form-label font-weight-bold">Nombre</label>
                                            <div class="col-sm-9"> 
                                                <input class="form-control-plaintext" readonly  value="{{ $alumno->nombre }}">
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                            <label class="col-sm-3 col-form-label font-weight-bold">Apellidos</label>
                                            <div class="col-sm-9"> 
                                                <input class="form-control-plaintext" readonly  value="{{ $alumno-> apellido}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group form-row">
                                            <label class="col-sm-3 col-form-label font-weight-bold">Grado</label>
                                            <div class="col-sm-9">
                                                <input  class="form-control-plaintext" readonly  value="{{ $alumno->grado->descripcion}}">
                                            </div>
                                        </div>
                                    </form>
                                    <a href="{{ route('alumnos.grado',['id'=>$alumno->grado_id])}}" class="btn btn-outline-info"><i class="fas fa-arrow-circle-left"></i>
                                    Regresar </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection