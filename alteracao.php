<?php
    session_start();
    include_once('conexao.php');

    if((!isset($_SESSION['cpf']) == true)  and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['cpf'];
   

    // Retrieve the input from the HTML form
    $newUsername = $_POST['nomeNovo'];
    $newPassword = $_POST['senhaNova'];

    // Replace 'current_username' with the existing username that you want to update
    $sql = "UPDATE respondente SET nome='$newUsername', senha='$newPassword' WHERE cpf='$logado'";

    if ($mysqli->query($sql) === TRUE) {
        echo "Username and Password updated successfully!";
        header('Location: paginaprincipal.php');
    } else {
        echo "Error updating record ";
    }

    $mysqli->close();

?>