<?php 
    include "conn.php";
    $query = $_GET["data"];
    $queryJSON = json_decode($query);
    $sqlQuery = "";

    if($queryJSON->action == "update"){
        $nColumns = count($queryJSON->columnsNames);
        $sqlQuery = " UPDATE `tbmedicos` SET ";
        
        for($i=0 ; $i<($nColumns-1) ; $i++){
            $sqlQuery = $sqlQuery . "`" . $queryJSON->columnsNames[$i] . "` =  '" . $queryJSON->columnsValues[$i] . "' , ";
        }        
        $sqlQuery = $sqlQuery . "`" . $queryJSON->columnsNames[$i] . "` =  '" . $queryJSON->columnsValues[$i] . "' WHERE `tbmedicos`.`medico` = ". $queryJSON->idMedico;
        //Adicione clausula where '}'
    }    

    if($queryJSON->action == "insert"){

        $nColumns = count($queryJSON->columnsNames);
        $sqlQuery = "INSERT INTO `".$queryJSON->tbName."`(";
        
        for($i=0 ; $i<($nColumns-1) ; $i++){
            $sqlQuery = $sqlQuery . "`" . $queryJSON->columnsNames[$i] . "` , ";
        }        
        $sqlQuery = $sqlQuery . "`" . $queryJSON->columnsNames[$i] . "` ) VALUES ( ";
        //Remover a virgula da ultima interacao e colocar '}'
        
        for($i=0 ; $i<($nColumns-1) ; $i++){
            $sqlQuery = $sqlQuery . "'" . $queryJSON->columnsValues[$i] . "' , ";
        }        
        $sqlQuery = $sqlQuery . "'" . $queryJSON->columnsValues[$i] . "' )";
        //Remover a virgula da ultima interacao e finalizar query
    }
   
    if($queryJSON->action == "remove"){        
        $sqlQuery = "DELETE FROM `".$queryJSON->tbName . "` WHERE `" . $queryJSON->columnsNames . "` = " . $queryJSON->columnsValues . "";
    }

    if ($conn->query($sqlQuery) === TRUE) {
        echo "OK";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }    

    $conn->close();
    


  
?>    