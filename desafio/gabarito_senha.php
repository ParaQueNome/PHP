<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
<?php

print_r($_POST);
$filename = 'senhas.txt';
if($_POST['senha'] == "123mudar"){
    
    echo '<br>';
    echo 'Parabens, voce acertou a senha';
}else{
    echo 'Senha incorreta';
    if(!file_exists('senhas.txt')){
       $handle=  fopen('senhas.txt','w');
    }else{
        $handle = fopen('senhas.txt','a');
    }
    fwrite($handle, $_POST['senha']);
    fwrite($handle, "\n");
    fflush($handle);
    fclose($handle);
}



?>
</body>
</html>