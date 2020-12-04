<?php 
  include 'php/conn.php';

  $formAction = 'php/insertScripts.php?tabela=tbconsultas';
  
  $currentPage = 'consultas';
  include 'topSite.php'; // Inclui cabecalho padrao
?>

<script>
// update limpar
</script>

<div class="container-fluid pr-5 pl-5">
  <div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">
      <h3 class="card-title m-0"><i class="fas fa-stethoscope mr-2"></i>Cadastro de Consultas</h3>
    </div>
    <div class="card-body">
        <form action="<?=$formAction?>" method="post">
            <div class="form-group ">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <label class="font-weight-bold">Paciente:</label>
                        <input class="form-control mb-3 bg-dark text-white" type="text" placeholder="Clique para selecionar" id="inputNomePaciente" name="inputNomePaciente" required style="pointer-events: none;">
                        <input class="form-control" type="text" id="inputIDPaciente" name="inputIDPaciente" style="display:none;">
                    </div>
                    <div class="col-12 col-lg-6">
                        <label class="font-weight-bold">Medico:</label>
                        <input class="form-control mb-3 bg-dark text-white" type="text" placeholder="Clique para selecionar" id="inputNomeMedico" name="inputNomeMedico" required style="pointer-events: none;">
                        <input class="form-control" type="text" id="inputIDMedico" name="inputIDMedico" style="display:none;">
                    </div>                    
                </div>  
               <div class="row">
                    <div class="col-12 col-lg-6">
                        <label class="font-weight-bold">Data:</label>
                        <input class="form-control mb-3" type="date" name="inputDataConsulta" required>
                    </div>
                    <div class="col-12 col-lg-6">
                        <label class="font-weight-bold">Horário:</label>
                        <input class="form-control mb-3" type="time" name="inputHorario" required>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <input class="btn btn-primary" style="width:120px" type="submit" value="Cadastrar">
                        <a class="btn btn-secondary" href="consultas.php" style="width:120px" role="submit">Limpar</a>
                    </div>
                </div>
            </div>
        </form>        
      <hr class="mt-3">
      <h3 class="card-title mt-4 mb-4">Pacientes</h3>      
      <table id="tbPacientes" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Plano</th>
            <th>Data de nascimento</th>
          </tr>
        </thead>

        <?php
    
    $sql = "SELECT * FROM `tbpacientes` ORDER BY `paciente` ";
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
      
      echo "<TR idTB='$idpaciente' textTB='$nomepaciente' class='cursor-pointer'><TD>$idpaciente</TD><TD>$nomepaciente</TD><TD>$cpfpaciente</TD><TD>$planopaciente</TD><TD>$nascimentopaciente</TD></TR>";
    }
  ?>

  
          </tbody>           
      </table>

      <hr class="mt-5">
      <h3 class="card-title mt-4 mb-4">Médicos</h3>      
      <table id="tbMedicos" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Médico</th>
            <th>CRM</th>
            <th>Especialidade</th>
          </tr>
        </thead>
        <tbody>

        <?php
    
    $sql = "SELECT `medico`, `nome`, `CRM`, `especialidade_FK`, `tbespecialidades`.`descricao` AS `especialidadeDescricao`, `data_cadastro` 
             FROM `tbmedicos`, `tbespecialidades` 
            WHERE `tbmedicos`.`especialidade_FK` = `tbespecialidades`.`especialidade`
            ORDER BY `medico`";
    $result = $conn->query($sql);  
    while($row = $result->fetch_assoc()) {

      $idmedico = $row["medico"];
      $nomemedico = $row["nome"];
      $crmmedico = $row["CRM"];
      $especialidademedico = $row["especialidadeDescricao"];

      echo "<TR idTB='$idmedico' textTB='$nomemedico' class='cursor-pointer'><TD>$idmedico</TD><TD>$nomemedico</TD><TD>$crmmedico</TD><TD>$especialidademedico</TD></TR>";

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

<script src="js/cadConsultas.js"></script>

</body>

</html>

<?php $conn->close(); ?>