<?php

// Carga una plantilla con datos
function render_template(string $template, array $data = [])
{
    // Saca variables del array
    extract($data);
    // Carga el archivo
    require "templates/$template.php";
}

// Trae datos de una API
function get_data(string $url): array
{
    $result = file_get_contents($url);
    return json_decode($result, true);
}