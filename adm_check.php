<?php session_start();
    
    if(!$_SESSION["userID"]){
        echo "<center><h1>Acesso Negado - Usuário nao logado</h1>";
        echo "<a href='index.php'>Realize o login</a></center>";
        die();
    }
    if($_SESSION["privilegio"]!=1){
        echo "<center><h1>Acesso Negado - Usuário nao possui privilegio</h1>";
        echo "<a href='index.php'>Realize o login</a></center>";
        die();
    }

?>
