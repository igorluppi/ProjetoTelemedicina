<?php
  include "php/conn.php";

  $alteraID = $_GET['altera'];
  $btnAlterar = false;
  $formAction = 'php/insertScripts.php?tabela=tbpacientes';
  $nomeInput = '';
  $CPFInput = '';
  $dataNascimento = '';
  $possuiPlano = null;

  if(!is_null($alteraID)){
    $sql = "SELECT `nome`, `cpf`, `plano`, `data_nascimento` FROM `tbpacientes` WHERE `paciente` =" . $alteraID;
    $result = $conn->query($sql); 
    $row = $result->fetch_assoc();

    $btnAlterar = true;
    $formAction = 'php/updateScripts.php?tabela=tbpacientes&id='.$alteraID;
    $nomeInput = $row["nome"];
    $CPFInput = $row["cpf"];
    $dataNascimento = $row["data_nascimento"];
    $possuiPlano = $row["plano"];
  }

  $currentPage = 'pacientes';
  include 'topSite.php'; // Inclui cabecalho padrao
?>



<div class="container-fluid pr-5 pl-5">
  <div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">
      <h3 class="card-title m-0"><i class="fas fa-user-injured mr-2"></i>Cadastro de Pacientes</h3>
    </div>
    <div class="card-body">
      <form action="<?=$formAction?>" method="post">
        <div class="form-group ">
          <label class="font-weight-bold">Nome:</label>
          <input type="text" class="form-control" name="inputPacienteNome" placeholder="Digite o nome" value="<?=$nomeInput?>" required>
        </div>
        <div class="form-group">
          <label class="font-weight-bold">CPF:</label>
          <input type="text" class="form-control" name="inputPacienteCPF" placeholder="Digite o CPF" value="<?=$CPFInput?>" required>
        </div>
        <div class="form-group">
          <label class="font-weight-bold">Data de nascimento:</label>
          <input class="form-control" type="date" value="<?=$dataNascimento?>" name="inputDataNascimento">
        </div>

        <div class="form-check">
            <?php if (!is_null($possuiPlano) && $possuiPlano == true) { ?>
            <input  type="checkbox" class="form-check-input lg-check" name="checkPlano" checked>
            <?php } else { ?>
            <input  type="checkbox" class="form-check-input lg-check" name="checkPlano">
            <?php } ?>
            <label class="form-check-label mb-3 ml-3" for="checkPlano"> Possui Plano?</label>
        </div>
           
          <input class="btn btn-primary" style="width:120px" type="submit" value="Cadastrar">
          
      </form>

      <hr class="mt-5">
      <h3 class="card-title mt-4 mb-4">Pacientes Cadastrados</h3>      
      <table id="tbPacientes" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Plano</th>
            <th>Data de nasc.</th>
            <th>Data de cadastro</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>

        <?php
    
    $sql = "SELECT * FROM `tbpacientes` ORDER BY `data_cadastro` ASC";
    $result = $conn->query($sql);  
    while($row = $result->fetch_assoc()) {
      $idpaciente = $row["paciente"];
      $nomepaciente = $row["nome"];
      $cpfpaciente = $row["cpf"];
      if ($row['plano'] != 0) {
        $planopaciente = "<i class='fas fa-check text-success'></i>";
      } else {
        $planopaciente = "<i class='fas fa-times text-danger'></i>";
      }
      $cadastropaciente = $row["data_cadastro"];
      $nascimentopaciente = $row["data_nascimento"];
      
      echo "<TR><TD>$idpaciente</TD><TD>$nomepaciente</TD><TD>$cpfpaciente</TD>
      <TD>$planopaciente</TD><TD>$nascimentopaciente</TD><TD>$cadastropaciente</TD>
      <TD><a href='pacientes.php?altera=$idpaciente'><i class='fas fa-sync-alt text-info mr-3'></i></a>
      <i redirect='php/deleteScripts.php?tabela=tbpacientes&id=$idpaciente' class='fas fa-trash-alt text-danger' onclick='dialogDelete(this)' style='cursor:pointer'></i></TD></TR>";
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

<script src="js/cadPacientes.js"></script>

</body>

</html>

<?php $conn->close(); ?>