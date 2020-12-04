<?php
    include "conn.php";
    $tabela = $_GET['tabela'];
    
    if ($tabela == 'tbmedicos'){

        $id = $_GET['id'];
                
        $sqlQuery = "DELETE FROM `tbmedicos` WHERE `medico` = ".$id;
        
        if ($conn->query($sqlQuery) === TRUE) {
            $msg = "Registro apagado com sucesso";            
        } else {
            $msg = "ERRO SQL: ".$sql." - Mensagem do Servidor: ".$conn->error;
        }  
        echo '<script>alert("'.$msg.'");window.location.href="../medicos.php";</script>';            
    } else if ($tabela == 'tbpacientes'){

        $id = $_GET['id'];
                
        $sqlQuery = "DELETE FROM `tbpacientes` WHERE `paciente` = ".$id;
        
        if ($conn->query($sqlQuery) === TRUE) {
            $msg = "Registro apagado com sucesso";            
        } else {
            $msg = "ERRO SQL: ".$sql." - Mensagem do Servidor: ".$conn->error;
        }  
        echo '<script>alert("'.$msg.'");window.location.href="../pacientes.php";</script>';            
    }
?>

