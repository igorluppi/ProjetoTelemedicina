<?php
include 'topSite.html'; // Inclui cabcario padrao
?>

<div class="container-fluid pr-5 pl-5">
  <div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">
      <h3 class="card-title m-0">Cadastro de Médicos</h3>
    </div>
    <div class="card-body">
      <form id="formNovoMedico">
        <div class="form-group ">
          <label for="medicoNome" class="font-weight-bold">Nome:</label>
          <input type="text" class="form-control" id="medicoNome" placeholder="Digite o nome" required>
        </div>
        <div class="form-group">
          <label for="CRM" class="font-weight-bold">CRM:</label>
          <input type="text" class="form-control" id="CRM" placeholder="Digite o CRM" required>
        </div>
        <div class="form-group">
          <label for="especialidade" class="font-weight-bold">Especialidade:</label>
          <select class="form-control" id="especialidade" required>
            <option value="">Selecione</option>
<?php
  include "php/conn.php";
  $sql = "SELECT `especialidade`, `descricao` FROM `tbEspecialidades` ORDER BY `descricao`";
  $result = $conn->query($sql);  
  while($row = $result->fetch_assoc()) {
    echo '<option value='.$row["especialidade"].'>'.$row["descricao"].'</option>';
  }
?>
          </select>
        </div>
        <!-- Armazena o ID Para alter -->
        <input type="text" class="form-control" id="idMedico" style="display:none">
        <button id="btnNovoMedico" type="submit" class="btn btn-primary" style="width:120px">Cadastrar</button>        
        <button id="btnAlteraMedico" type="submit" class="btn btn-primary d-none" style="width:120px">Alterar</button>
        <a  id="btnCancelaAleracaoMedico" class="btn btn-primary d-none" href="index.php" style="width:120px" role="button">Cancelar</a>
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

<script src="js/tbMedicosCadastrosAlteracoes.js"></script>
<script src="js/tbMedicosScript.js"></script>

</body>

</html>