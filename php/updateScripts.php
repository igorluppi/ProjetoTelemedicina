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
        echo '<script>alert("'.$msg.'");window.location.href="../medicos.php";</script>';            
    } else if ($tabela == 'tbpacientes'){

        $id = $_GET['id'];
                
        $inputPacienteNome = $_POST['inputPacienteNome'];
        $inputPacienteCPF = $_POST['inputPacienteCPF'];
        $inputPlano = $_POST['checkPlano'];
        if ($inputPlano == null) {
            $inputPlano = 0;
        } else {
            $inputPlano = 1;
        }
        $inputDataNascimento = $_POST['inputDataNascimento'];     
        
        $sqlQuery = "UPDATE `tbpacientes` 
                        SET 
                      `nome`='".$inputPacienteNome."',
                       `cpf`='".$inputPacienteCPF."',
                     `plano`='".$inputPlano."',
           `data_nascimento`='".$inputDataNascimento."'
                      WHERE 
                 `paciente` = ".$id;
        
        if ($conn->query($sqlQuery) === TRUE) {
            $msg = "Registro alterado com sucesso";            
        } else {
            $msg = "ERRO SQL: ".$sql." - Mensagem do Servidor: ".$conn->error;
        }  
        echo '<script>alert("'.$msg.'");window.location.href="../pacientes.php";</script>';            
    }
?>

