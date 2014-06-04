<?php

$mensaje = "Titulo";
$aqui = file_get_contents("index2.html");
$html = str_replace("[[mensaje]]", $mensaje, $aqui);
echo $html;
?>