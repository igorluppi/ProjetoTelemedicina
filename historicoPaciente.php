<?php
  include 'php/conn.php';

  $buscaID = $_GET['id'];
  $selecionaTodos = true;

  if(!is_null($buscaID) && $buscaID >= 0){
    $sqlBusca = "SELECT consulta, medico_FK, paciente_FK, horario, data, medico, nome 
    FROM `tbconsultas`, `tbmedicos`  
    WHERE `medico_FK` = `medico` and `paciente_FK` =" . $buscaID;
    
    $selecionaTodos = false;
  } else {
    $sqlBusca = "SELECT consulta, medico_FK, paciente_FK, horario, data, medico, nome 
    FROM `tbconsultas`, `tbmedicos`  
    WHERE `medico_FK` = `medico`";
    $buscaID = -1;
  }

  $currentPage = 'historicoPaciente';
  include 'topSite.php'; // Inclui cabecalho padrao

  function is_selected($valor, $ref) {
    if ($valor == $ref) {
      return "selected";
    }
  }
?>



<div class="container-fluid pr-5 pl-5">
  <div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">
      <h3 class="card-title m-0">Histórico Paciente</h3>
    </div>
    <div class="card-body">
      <h3>Selecione o Paciente</h3>
    <form action="historicoPaciente.php" method="post">
        <div class="form-group ">          
        <select class="form-control" id="historicoPaciente">
            <option value="-1" <?=is_selected(-1, $buscaID)?>>Todos</option>

            <?php
    
    $sql = "SELECT paciente, nome FROM `tbpacientes`";
    $result = $conn->query($sql);  
    while($row = $result->fetch_assoc()) {
      $idpaciente = $row["paciente"];
      $nomepaciente = $row["nome"];
      
      echo "<option ".is_selected($idpaciente, $buscaID)." value=$idpaciente>$nomepaciente (id:$idpaciente)</option>";
    }
  ?>

</select>



        </div>
    </form>     
      <hr class="mt-3">
      <h3 class="card-title mt-4 mb-4">Agendamentos</h3>      
      <table id="tbHistorico" class="display compact nowrap" style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Médico</th>
            <th>Data</th>
            <th>Horário</th>
            <th>Ação</th>
          </tr>
        </thead>
           <tbody>
             
        <?php
        $result = $conn->query($sqlBusca);   
        while($row = $result->fetch_assoc()){
          $idconsulta = $row["consulta"];
          $nomemedico = $row["nome"];
          $idmedico = $row["medico"];
          $horario = $row["horario"];
          $data = $row["data"];

          echo "<TR><TD>$idconsulta</TD><TD>$nomemedico <span class='idsTable'>(id:$idmedico)</span></TD><TD>$data</TD><TD>$horario</TD>
          <TD><i redirect='php/deleteScripts.php?tabela=tbconsultas&src=Paciente&id=$idconsulta' class='fas fa-trash-alt text-danger' onclick='dialogDelete(this)' style='cursor:pointer'></i></TD></TD></TR>";

        }
        
        ?>

   
          </tbody>           
      </table>
     
      
    </div>

  </div>
</div>
</div> <!-- DIV FORA DO ARQUIVO-->
</div> <!-- DIV FORA DO ARQUIVO-->
<!-- /#page-content-wrapper -->
</div> <!-- DIV FORA DO ARQUIVO-->
<!-- /#wrapper -->



<!-- Menu Toggle Script -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>

<script type="text/javascript" src="vendor/DataTables/datatables.min.js"></script>

<script src="js/historicos.js"></script>

</body>

</html>

<?php $conn->close(); ?>