<?php

// Archivo principal

// Cargar constantes
require_once 'consts.php';
// Cargar funciones
require_once 'functions.php';
// Cargar clase de películas
require_once 'classes/NextMovie.php';

// Obtener datos de la película
$next_movie = NextMovie::fetch_and_create_movie(API_URL);
// Preparar datos para la vista
$next_movie_data = $next_movie->get_data();
?>

<?php
// Cargar cabecera
render_template('head', ["title" => $next_movie_data["title"]]);
// Cargar contenido principal
render_template('main', array_merge(
    $next_movie_data,
    ["until_message" => $next_movie->get_until_message()]
));
?>