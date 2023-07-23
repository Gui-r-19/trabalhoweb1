<?php
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$bd = "trabalho_web1_2023";

$mysqli = new mysqli ($servidor, $usuario, $senha ,$bd);

    if($mysqli->error){
        die("Falha ao conectar ao banco de dados: " . $mysqli->error);

    }


?>