<?php
    $host = "localhost";
    $db   = "usuario";
    $user = "root";
    $pass = "";
    
    $con = mysqli_connect($host, $user, $pass);
    mysqli_select_db($con, $db);

    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        mysqli_query($con, "INSERT INTO game VALUES (DEFAULT, '$nome', '$data')");
        mysqli_close($con);
    }

?>