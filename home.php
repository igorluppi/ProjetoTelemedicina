<?php session_start();
    
    if(!$_SESSION["userID"]){
        echo "<center><h1>Acesso Negado</h1>";
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
            <a href="index.php" class="float-right">Deslogar</a>   
            <h1 class="mt-5">Bem vindo usuário</h1>
            <h3 class="mb-3 text-danger"><?php echo $_SESSION["nome"]; ?></h3>
            <p class="lead">Navegue entre os links abaixo:</p>
            <div class="row mb-2">
               <div class="col-12">
                  <a href="adm.php">Área do administrador</a>
                  <p>Apenas acessível com privilégio de administrador</p>
               </div>
            </div>
            <div class="row mb-2">
               <div class="col-12">
                  <a href="comum.php">Área Comum</a>
                  <p>Acessível para todos os usuários logados</p>
               </div>
            </div>   
        </div>
      </main>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>
</html>