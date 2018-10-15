<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layout')

@section('title','Pagina No Encotrada')

@section('contenido')
<div class="container-fluid">
    <div class="text-center">
    <h1 class="text-center">Pagina no encontrada </h1>
    </div>
    <img src="{{asset('images/404.jpg')}}" class="thumbnail img-fluid mx-auto d-block"/> 
</div>
    @endsection