<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layout')

@section('title',"Editar Alumno $alumno->id")

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('alumnos.index')}}">Alumnos</a></li>
    <li class="breadcrumb-item"><a href="{{ route('alumnos.grado',['id'=> $alumno->grado_id])}}">Grado</a></li>
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
                    <label class="col-sm-3 col-form-label">Nombre</label>
                    <div class="col-sm-9"> 
                        <input placeholder="Ingrese los nombre completos" class="form-control" value="{{ $alumno->nombre }}" name='nombre'>
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-3 col-form-label">Apellidos</label>
                    <div class="col-sm-9"> 
                        <input placeholder="Ingrese los apellidos" class="form-control" value="{{ $alumno->apellido }}" name="apellido">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-3 col-form-label">Grado</label>
                    <div class="col-sm-9">
                        <select class="form-control">
                            @foreach($grados as $grado)
                                @if($grado->id == $alumno->grado_id)
                                
                                <option selected="" value="{{ $grado->id }}">{{$grado->descripcion}}</option>
                                @else <option value="{{ $grado->id }}">{{$grado->descripcion}}</option>
                                @endif
                           @endforeach
                        </select>
                    </div>
                </div>
                <div class="btn-group    w-100 form-row">
                    <a href="{{ route('alumnos.grado',['id'=> $alumno->grado_id])}}" class="btn btn-outline-danger btn-group col-sm-6 d-inline-block text-center"> Cancelar </a>
                    <a href="{{ route('alumnos.grado',['id'=> $alumno->grado_id])}}" class="btn btn-outline-primary btn-group col-sm-6 d-inline-block text-center" id='confirmar'> Guardar <i class="fas fa-save"></i></a>
                </div>

            </form>
        </div>
    </div>  
</div>

@endsection
