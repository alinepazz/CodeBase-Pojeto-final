<?php
 $servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "codebase";

// $servidor = "localhost";
// $usuario = "u977313812_user_codebase";
// $senha = "senac*codebase";
// $banco = "u977313812_bd_codebase";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");