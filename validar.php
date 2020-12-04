<?php session_start(); ?>
<html>
<?php
    include "php/conn.php";    

    //https://www.md5hashgenerator.com/
    //admin123 - 0192023a7bbd73250516f069df18b500
    //abc1234 - a141c47927929bc2d1fb6d336a256df4
    
    $login = $_POST['input-login'];
    $senha = $_POST['input-pwd'];

    $senhaMD5 = md5($senha); //convert sting em hash md5

    $sql = "SELECT `usuario`, `nome`, `privilegio` 
              FROM `tbusuarios`
             WHERE `login` = '".$login."'
               AND `senha` = '".$senhaMD5."'
              ";
    $result = $conn->query($sql);  
    $row = $result->fetch_assoc();
    
    if ($result->num_rows){ //verifica se há resultados

        $_SESSION["userID"]     = $row['usuario'];
        $_SESSION["nome"]       = $row['nome'];
        $_SESSION["privilegio"] = $row['privilegio'];
        echo "<script>window.location='home.php'</script>";

    }
    else{
        
        echo "<script>alert('Senha incorreta');</script>";
        echo "<script>window.location='index.php'</script>";
    }
?>
</html>