<?php

require_once __DIR__ . "/../lib/php/recuperaJson.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$json = recuperaJson();
$equipo = $json->equipo;
$nombres = $json->nombres;
$resultado =
 "{$equipo} {$nombres}.";
devuelveJson($resultado);
