@extends('layouts.master')

@section('titulo', 'Blade title')

@section('menu')
    Menu
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Sección 1</a></li>
    </ul>
    @parent
@endsection

@section('contenido')
    <p>Hola</p>
    <p>¿Que tal?</p>
@endsection