@extends('layouts.master')

@section('titulo', 'Pagina Frutas')

@section('menu')
    Menu
    <ul>
        <li><a href="#">Manzana</a></li>
        <li><a href="#">Pera</a></li>
    </ul>
    @parent
@endsection

@section('contenido')
    @forelse ($frutas as $fruta)
        @include('layouts.fruta')
    @empty
        @include('layouts.vacio', ['elementos' => 'frutas'])
    @endforelse
    <script>
        let frutas = @json($frutas, JSON_PRETTY_PRINT);
        console.log(frutas);
    </script>
@endsection