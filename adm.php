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

<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
      <main role="main" class="flex-shrink-0">
          <div class="container">
          <div class="float-right"><a class="mr-3" href="home.php">Voltar</a><a href="index.php">Deslogar</a></div> 
            <h1 class="mt-5">Bem vindo usuário</h1>
            <h3 class="mb-3 text-danger"><?php echo $_SESSION["nome"]; ?></h3>
            <p class="lead">Esta é uma página restrita a administradores</p>
        </div>
      </main>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>
</html>