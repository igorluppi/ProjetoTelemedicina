<?php
    include "conn.php";
    $tabela = $_GET['tabela'];
    
    if ($tabela == 'tbmedicos'){
                
        $inputMedicoNome = $_POST['inputMedicoNome'];
        $inputCRM = $_POST['inputCRM'];
        $inputEspecialidadeFK = $_POST['inputEspecialidadeFK'];   
        $dtCadastro = date("Y-m-d");
        
        $sqlQuery = "INSERT INTO `tbmedicos`( `nome`, `CRM`, `especialidade_FK`, `data_cadastro`) 
                          VALUES (
                          '".$inputMedicoNome."',
                          '".$inputCRM."',
                          '".$inputEspecialidadeFK."',
                          '".$dtCadastro."')";
        
        if ($conn->query($sqlQuery) === TRUE) {
            $msg = "Registro incluido com sucesso";            
        } else {
            $msg = "ERRO SQL: ".$sql." - Mensagem do Servidor: ".$conn->error;
        }  
        echo '<script>alert("'.$msg.'");window.location.href="../medicos.php";</script>';            
    }
?>