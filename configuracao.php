<?php
    session_start();
    include_once('conexao.php');

    if((!isset($_SESSION['cpf']) == true)  and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['cpf'];
   


?>

 
<!-- HTML E CSS -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <style>
@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
body {
    background: linear-gradient(to bottom, #67DF9B, #20C4AE);
    box-sizing: border-box;
    margin: 0;
    font-family: 'Muli';
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    overflow: hidden;
}

.container {
    background: white;
    position: relative;
    border: 3px solid black;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    display: flex;
    flex-direction: column;
    padding: 50px 70px;
    justify-content: center;
    text-align: center;
    width: 560px;
    max-width: 100%;  
}
.container h2 {
    margin-top: 5px;
    margin-bottom: 40px;
}
.container p {
    margin-bottom: 55px;
}
input { 
    width: 524px;
    margin-left: 0px;
    padding: 15px;
    margin-bottom: 10px;
}
input:focus{
    outline: 0;
    border: 1px solid #20C4AE;
}
#message {
    padding-bottom: 50px;
}
button {
    background: linear-gradient(to left, #67DF9B, #20C4AE);
    border: none;
    border-radius: 5px;
    box-shadow: 0 16px 31px -17px rgba(0,31,97,0.6);
    width: 100%;
    padding: 15px;
    color: white;
    transition: transform 1s;
}
button:hover {
    background-color: white;
    opacity: 80%;
    transform: scale(0.99);
}
.nav-bar {
    display: flex;
    text-align: center;
    justify-content: center;
    justify-items: center;
    gap: 80px;
    margin-top: -22px ;
    list-style: none;
    padding-bottom: 15px;
    border-bottom: 1px solid #67DF9B;
    border-radius: 5%;
}
a {
    text-decoration: none;
    color: black;
    transition: all 0.5s;
}
a:hover {
    color: #67DF9B;
}
.delete-btn {
    display: flex;
    background: linear-gradient(to left, #EB274B, #FF842B, #EB274B);
    animation: colors 25s ease infinite;
    border: 1px solid black;
    color: aliceblue;
    font-family: 'Muli';
    justify-content: center;
    align-items: center;
    margin-right: 10px;
    height: 20px;
    width: 20px;
    cursor: pointer;
    transition: transform, border-radius 0.5s;
}
.delete-btn:hover {
    transform: scale(0.9);
    border-radius: 50%;
}
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <ul class="nav-bar">
                <li> <a href="paginaPrincipal.php">Home</a></li>
                <li><a href="edit_usuario.php">Suas contas</a></li>
                <li> <a href="configuracao.php">Configurações</a></li>
            </ul>
        </nav>
        <header>
        <div>
            <h2>Editar Informações do usuario</h2>
        </div>
        </header>
        <form action="alteracao.php" method="POST">
            <input type="text" name="nomeNovo" placeholder="Novo Nome">
            <br><br>
            <input type="text" name="senhaNova" placeholder="Nova Senha">
            <br><br>

            <input class="inputSubmit" type="submit" name="submit" value="Editar">
        </form>
        <br>
        <br>
    </div>
</body>
</html>