

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
<?php

print_r($_POST);
$filename = 'usuarios.txt';

if(!file_exists('senhas.txt')){
    $handle=  fopen('usuarios.txt','w');
}else{
    $handle = fopen('usuarios.txt','a');
}

fwrite($handle, $_POST['name']);
fwrite($handle,",");
fwrite($handle,$_POST['cpf']);
fwrite($handle,"\n");
fflush($handle);
fclose($handle);




?>
</body>
</html>