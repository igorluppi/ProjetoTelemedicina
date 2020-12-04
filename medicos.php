<?php
  include "adm_check.php";
  include "php/conn.php";

  $alteraID = $_GET['altera'];
  $btnAlterar = false;
  $formAction = 'php/insertScripts.php?tabela=tbmedicos';
  $nomeInput = '';
  $CRMInput = '';
  $especialidade_FKInput = null;

  if(!is_null($alteraID)){
    $sql = "SELECT `nome`, `CRM`, `especialidade_FK`, `data_cadastro` FROM `tbmedicos` WHERE `medico` =" . $alteraID;
    $result = $conn->query($sql); 
    $row = $result->fetch_assoc();

    $btnAlterar = true;
    $formAction = 'php/updateScripts.php?tabela=tbmedicos&id='.$alteraID;
    $nomeInput = $row["nome"];
    $CRMInput = $row["CRM"];
    $especialidade_FKInput = $row["especialidade_FK"];
    $data_cadastroInput = $row["data_cadastro"];
  }

  $currentPage = 'medicos';
  include 'topSite.php'; // Inclui cabecalho padrao
?>

<div class="container-fluid pr-5 pl-5">
  <div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">
      <h3 class="card-title m-0"><i class="fas fa-user-md mr-2"></i>Cadastro de Médicos</h3>
    </div>
    <div class="card-body">
      <form action="<?=$formAction?>" method="post">
        <div class="form-group ">
          <label class="font-weight-bold">Nome:</label>
          <input type="text" class="form-control" name="inputMedicoNome" placeholder="Digite o nome" value="<?=$nomeInput?>" required>
        </div>
        <div class="form-group">
          <label class="font-weight-bold">CRM:</label>
          <input type="text" class="form-control" name="inputCRM" placeholder="Digite o CRM" value="<?=$CRMInput?>" required>
        </div>
        <div class="form-group">
          <label class="font-weight-bold">Especialidade:</label>
          <select class="form-control" name="inputEspecialidadeFK" required>
            <option value="">Selecione</option>
<?php
  
  $sql = "SELECT especialidade, descricao FROM tbespecialidades ORDER BY descricao";
  $result = $conn->query($sql);    
  echo 'result';
  while($row = $result->fetch_assoc()) {
    $selected = "";
    if(!is_null($especialidade_FKInput) && $especialidade_FKInput == $row["especialidade"]){
        $selected = "selected"; 
    }
    echo '<option value='.$row["especialidade"].' '.$selected.'>'.$row["descricao"].'</option>';
  }
?>
          </select>
        </div>
        <!-- Armazena o ID Para alter -->
        <input type="text" class="form-control" id="idMedico" style="display:none">
        <?php 
          if ($btnAlterar){
        ?>        
          <input class="btn btn-primary" style="width:120px" type="submit" value="Alterar">
          <a class="btn btn-secondary" href="medicos.php" style="width:120px" role="submit">Cancelar</a>
          
          <?php } else { ?>
            <input class="btn btn-primary" style="width:120px" type="submit" value="Cadastrar">
        <?php } ?>
      </form>

      <hr class="mt-5">
      <h3 class="card-title mt-4 mb-4">Médicos Cadastrados</h3>      
      <table id="tbMedicos" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Médico</th>
            <th>CRM</th>
            <th>Especialidade</th>
            <th>Data Cadastro</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>       
<?php
    
  $sql = "SELECT `medico`, `nome`, `CRM`, `especialidade_FK`, `tbespecialidades`.`descricao` AS `especialidadeDescricao`, `data_cadastro` 
           FROM `tbmedicos`, `tbespecialidades` 
          WHERE `tbmedicos`.`especialidade_FK` = `tbespecialidades`.`especialidade`
          ORDER BY `nome`";
  $result = $conn->query($sql);  
  while($row = $result->fetch_assoc()) {
    echo '<TR>';
    echo '<TD>'. $row["medico"] .'</TD>';
    echo '<TD>'. $row["nome"] .'</TD>';
    echo '<TD>'. $row["CRM"] .'</TD>';
    echo '<TD>'. $row["especialidadeDescricao"] .'</TD>';
    echo '<TD>'. $row["data_cadastro"] .'</TD>';
    echo '<TD><a href="medicos.php?altera='.$row["medico"].'"><i class="fas fa-sync-alt text-info mr-3"></i></a><i redirect="php/deleteScripts.php?tabela=tbmedicos&id='.$row["medico"].'" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD>';
    echo '</TR>';
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

<script src="js/cadMedicos.js"></script>

</body>

</html>

<?php $conn->close(); ?>