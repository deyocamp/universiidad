<?php

$Recuest = $_POST['Nombre'];
$Saludo = "Hola ".$Recuest;

$html = "<h1>sxdefrgthyujiklopñ</h1>";

echo json_encode(array('data'=>$html,'saludo'=>$Saludo));
