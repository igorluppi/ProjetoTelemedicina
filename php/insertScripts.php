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
    } else if ($tabela == 'tbpacientes') {

        $inputPacienteNome = $_POST['inputPacienteNome'];
        $inputPacienteCPF = $_POST['inputPacienteCPF'];
        $inputPlano = $_POST['checkPlano'];
        if ($inputPlano == null) {
            $inputPlano = 0;
        } else {
            $inputPlano = 1;
        }
        $inputDataNascimento = $_POST['inputDataNascimento'];
        $dtCadastro = date("Y-m-d");
        
        $sqlQuery = "INSERT INTO `tbpacientes` (`nome`, `cpf`, `plano`, `data_cadastro`, `data_nascimento`) 
                     VALUES ('$inputPacienteNome', '$inputPacienteCPF', '$inputPlano', '$dtCadastro', '$inputDataNascimento')";
        
        if ($conn->query($sqlQuery) === TRUE) {
            $msg = "Registro incluido com sucesso";            
        } else {
            $msg = "ERRO SQL: ".$sql." - Mensagem do Servidor: ".$conn->error;
        }  
        echo '<script>alert("'.$msg.'");window.location.href="../pacientes.php";</script>';  

    } else if ($tabela == 'tbconsultas') {

        $inputIDPaciente = $_POST['inputIDPaciente'];
        $inputIDMedico = $_POST['inputIDMedico'];
        $inputDataConsulta = $_POST['inputDataConsulta'];
        $inputHorario = $_POST['inputHorario'];
        
        $sqlQuery = "INSERT INTO `tbconsultas` (`medico_FK`, `paciente_FK`, `horario`, `data`) 
                     VALUES ('$inputIDMedico', '$inputIDPaciente', '$inputHorario', '$inputDataConsulta')";
        
        if ($conn->query($sqlQuery) === TRUE) {
            $msg = "Registro incluido com sucesso";            
        } else {
            $msg = "ERRO SQL: ".$sql." - Mensagem do Servidor: ".$conn->error;
        }  
        echo '<script>alert("'.$msg.'");window.location.href="../consultas.php";</script>';  

    }
?>