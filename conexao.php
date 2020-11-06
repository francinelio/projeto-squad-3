<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "projeto_squad_3";

global $conex;

$conexao = mysqli_connect($servername, $username, $password, $database);

if (!$conexao) {
    die("Falhou a conexão" . mysqli_connect_error());
}
