<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
<form action= "cadastrar.php" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="name" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
            <input type="submit" value= "Enviar">
</form>
    <p>
        <!-- 
        <a href="cadastro.php" class="btn btn-primary">Cadastro Pessoas</a>
        <br><br>
        -->
        <a href="welcome.php" class="btn btn-danger">Home</a>
    </p>
            
    
</body>
</html>