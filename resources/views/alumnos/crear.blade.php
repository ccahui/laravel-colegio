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
                        <li class="breadcrumb-item"><a href="{{ route('alumnos.index')}}">Alumnos</a></li>
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
                    <form action="{{url('/alumnos/crear')}}" method="post">
                        {{ csrf_field()}}
                        
                        <div class="form-group form-row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Nombres</label>
                            <div class="col-sm-9"> 
                                <input placeholder="Ingrese los nombre completos" class="form-control" name='nombre'>
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Apellidos</label>
                            <div class="col-sm-9"> 
                                <input placeholder="Ingrese los apellidos" class="form-control" name='apellido'>
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-sm-3 col-form-label font-weight-bold" name='grado'>Grado</label>
                            <div class="col-sm-9">
                            <select class="form-control" name="grado">
                                @foreach($grados as $grado)
                                <option value="{{ $grado->id }}">{{ $grado->descripcion}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Foto</label>
                            <input type="file" class="form-control-file"> 
                        </div>
                        <div>
                            <button type='submit' class="btn btn-outline-primary btn-block"> Guardar <i class="fas fa-save"></i></button>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
@endsection
