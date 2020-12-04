<?php
    session_start();
    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Exemplo</title>

    <style>
.bg-index {
    background-image: url('vendor/bg.jpg'); 
    background-repeat: no-repeat; 
    background-size: cover; 
    background-position: center center;
}

</style>
</head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/estilos.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body class="bg-index">
    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center" style="padding-top: 10rem;">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="validar.php" method="post">
                            <h3 class="text-center p-3">Acessar E-Health</h3>
                            <div class="form-group">
                                <label for="input-login" class="text-labels">Username:</label><br>
                                <input type="text" name="input-login" id="input-login" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="input-pwd" class="text-labels">Password:</label><br>
                                <input type="password" name="input-pwd" id="input-pwd" class="form-control">
                            </div>
                            <div class="form-group">                                
                                <input type="submit" name="submit" class="btn btn-info btn-block btn-md" value="Entrar">
                            </div>                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>