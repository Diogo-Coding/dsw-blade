<?php 
require '../vendor/autoload.php';
use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';
$blade = new Blade($views, $cache);

$titulo = 'Blade';
$nombre = 'Diogo';
$edad = 12;
$maximo = 3;
// $aficiones = ['PHP', 'Javascript', 'CSS', 'Blade'];
$aficiones = [];

echo $blade->view()->make('plantilla1', compact('titulo', 'nombre', 'edad', 'maximo', 'aficiones'))->render();
