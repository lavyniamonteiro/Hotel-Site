<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bdnome = "hotel_bd";

$conexao = new mysqli($host,$usuario, $senha, $bdnome);

if($conexao)
    echo "conexão estabelecida ";
else
    echo "not conexão";


?>