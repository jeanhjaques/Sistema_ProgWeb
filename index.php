<?php
    //usuario phpmyadmin: root senha em branco
    include "Usuario.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
    </head>
    <body>
        <span><strong>Nome: </strong></span>
        <input type="text" name="nome" value="<?php echo $nome; ?>" class="input">
        <br>
        <br>
        <span><strong>Idade: </strong></span>
        <input type="text" name="idade" value="<?php echo $idade; ?>" class="input">
        <br>
        <br>
        <span><strong>CPF: </strong></span>
        <input type="text" name="cpf" value="<?php echo $cpf; ?>" class="input">
        <br>
        <br>
        <span><strong>Endereço: </strong></span>
        <input type="text" name="endereco" value="<?php echo $endereco; ?>" class="input">
        <br>
        <br>
        <span><strong>CEP: </strong></span>
        <input type="text" name="cep" value="<?php echo $cep; ?>" class="input">
        <br>
        <br>
        <span><strong>Número do Cartão: </strong></span>
        <input type="text" name="cartao" value="<?php echo $num_cartao; ?>" class="input">
    </body>
</html>