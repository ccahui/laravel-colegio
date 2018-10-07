<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layout')

@section('title','Alumnos Por Grados')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
        <li class="breadcrumb-item active">Alumnos</li>
    </ol>
    <h5 class="mx-2"><a href="alumnos/crear"><i class="fas fa-plus-circle icono"></i> Crear Alumno </a></h5>
@endsection

@section('titulo','Listado de Grados del Colegio')

@section('contenido')
 <div class="col-sm-10 col-md-6 col-xl-5">   
@if( !empty($grados) )
        <div class="btn-group btn-group-vertical btn-block">
        @foreach($grados as $grado)
            <a href= 'alumnos/grado-1' class="btn btn-outline-dark "> {{ $grado }} </a>    
        @endforeach
        </div>
    @else
        <h6>No hay Grados Registrados</h6>
    @endif
 </div>
@endsection