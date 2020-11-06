<?php
    include "conn.php";
    $tabela = $_GET['tabela'];
    
    if ($tabela == 'tbmedicos'){

        $id = $_GET['id'];
                
        $inputMedicoNome = $_POST['inputMedicoNome'];
        $inputCRM = $_POST['inputCRM'];
        $inputEspecialidadeFK = $_POST['inputEspecialidadeFK'];        
        
        $sqlQuery = "UPDATE `tbmedicos` 
                        SET 
                      `nome`='".$inputMedicoNome."',
                       `CRM`='".$inputCRM."',
          `especialidade_FK`='".$inputEspecialidadeFK."'
                      WHERE 
                   `medico` = ".$id;
        
        if ($conn->query($sqlQuery) === TRUE) {
            $msg = "Registro alterado com sucesso";            
        } else {
            $msg = "ERRO SQL: ".$sql." - Mensagem do Servidor: ".$conn->error;
        }  
        echo '<script>alert("'.$msg.'");window.location.href="../index.php";</script>';            
    }
?>

