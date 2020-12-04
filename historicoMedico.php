<?php
  include 'php/conn.php';

  $buscaID = $_GET['id'];
  $selecionaTodos = true;

  if(!is_null($buscaID) && $buscaID >= 0){
    $sqlBusca = "SELECT consulta, medico_FK, paciente_FK, horario, data, paciente, nome 
    FROM `tbconsultas`, `tbpacientes`  
    WHERE `paciente_FK` = `paciente` and `medico_FK` =" . $buscaID;
    
    $selecionaTodos = false;
  } else {
    $sqlBusca = "SELECT consulta, medico_FK, paciente_FK, horario, data, paciente, nome 
    FROM `tbconsultas`, `tbpacientes`  
    WHERE `paciente_FK` = `paciente`";
    $buscaID = -1;
  }

  $currentPage = 'historicoMedico';
  include 'topSite.php'; // Inclui cabecalho padrao

  function is_selected($valor, $ref) {
    if ($valor == $ref) {
      return "selected";
    } else {
      return "";
    }
  }
?>



<div class="container-fluid pr-5 pl-5">
  <div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">
      <h3 class="card-title m-0">Histórico Médico</h3>
    </div>
    <div class="card-body">
      <h3>Selecione o Médico</h3>
    <form action="historicoMedico.php.html" method="post">
        <div class="form-group ">          
        <select class="form-control" id="historicoMedico">
            <option value="-1" <?=is_selected(-1, $buscaID)?>>Todos</option>

            <?php
    
    $sql = "SELECT medico, nome FROM `tbmedicos`";
    $result = $conn->query($sql);  
    while($row = $result->fetch_assoc()) {
      $idmedico = $row["medico"];
      $nomemedico = $row["nome"];
      
      echo "<option ".is_selected($idmedico, $buscaID)." value=$idmedico>$nomemedico (id:$idmedico)</option>";
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
 
            <th>Paciente</th>
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
          $nomepaciente = $row["nome"];
          $idpaciente = $row["paciente"];
          $horario = $row["horario"];
          $data = $row["data"];

          echo "<TR><TD>$idconsulta</TD><TD>$nomepaciente <span class='idsTable'>(id:$idpaciente)</span></TD><TD>$data</TD><TD>$horario</TD>
          <TD><i redirect='php/deleteScripts.php?tabela=tbconsultas&src=Medico&id=$idconsulta' class='fas fa-trash-alt text-danger' onclick='dialogDelete(this)' style='cursor:pointer'></i></TD></TD></TR>";

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