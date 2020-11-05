<?php
include "conn.php";

$tabela = $_GET["tabela"];
if($tabela=="hhh"){
  echo "AQUI";
}
  if($tabela=="tbmedicos"){
    $sql = "SELECT `medico`, `nome`, `CRM`, `tbespecialidades`.`descricao` AS `especialidade_descricao`, `especialidade_FK`, `data_cadastro` FROM `tbmedicos`, `tbespecialidades` WHERE `tbmedicos`.`especialidade_FK` = `tbespecialidades`.`especialidade`";    
    
    //$sql = "SELECT `medico`, `nome`, `CRM`, `especialidade_FK` AS `especialidade_descricao`, `data_cadastro`, `data_alteracao` FROM `medicos`, `especialidades` WHERE `medicos`.`especialidade_FK` = `especialidades`.`especialidade`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo "[";
      $i=0;
      while($row = $result->fetch_assoc()) {
        echo '{ "medico": '. $row["medico"] .',
            "nome":"'. $row["nome"] .'",
            "CRM":"'. $row["CRM"] .'",
            "especialidade_descricao":"'. $row["especialidade_descricao"] .'",
            "especialidade_FK":"'. $row["especialidade_FK"] .'",
            "data_cadastro":"'. $row["data_cadastro"] .'"}';        
        $i++;
        if ($result->num_rows > $i){
            echo ",";
        }
      }
      echo "]";
    } else {
      echo "{[]}";
    }
  }
$conn->close();
?>