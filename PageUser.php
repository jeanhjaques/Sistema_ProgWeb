<?php
    include "Usuario.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Página inicial</title>
    </head>
    <body>
        <?php
        $link = mysqli_query($con, "SELECT * FROM usuario") or die($mysqli->error); 
        while($dado = $link->fetch_array()){?>
            <span><?php echo "Nome: ",  $dado['nome'], '<br>'; ?></span>
            <span><?php echo "Data de nascimento: ",  $dado['nsc'], '<br>'; ?></span>
            <span><?php echo "CPF: ", $dado['cpf'], '<br>'; ?></span>
            <span><?php echo "Endereço: ", $dado['endereco'], '<br>'; ?></span>
            <span><?php echo "CEP: ", $dado['cep'], '<br>'; ?></span>
            <form action="Index_Game.php">
                <button>Xablau</button>
            </form>
        <?php } ?>
    </body>
</html>