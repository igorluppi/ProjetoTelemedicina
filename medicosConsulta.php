<?php
  session_start();
    
  if(!$_SESSION["userID"]){
      echo "<center><h1>Acesso Negado - Usuário nao logado</h1>";
      echo "<a href='index.php'>Realize o login</a></center>";
      die();
  }

  include "php/conn.php";

  $currentPage = 'medicosConsulta';
  include 'topSiteComum.php'; // Inclui cabecalho padrao
?>

<div class="container-fluid pr-5 pl-5">
  <div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">
      <h3 class="card-title m-0"><i class="fas fa-user-md mr-2"></i>Buscar Médicos</h3>
    </div>
    <div class="card-body">
      

      <!-- <hr class="mt-5"> -->
      <h3 class="card-title mt-4 mb-4">Médicos Cadastrados</h3>      
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
          ORDER BY `nome`";
  $result = $conn->query($sql);  
  while($row = $result->fetch_assoc()) {
    echo '<TR>';
    echo '<TD>'. $row["medico"] .'</TD>';
    echo '<TD>'. $row["nome"] .'</TD>';
    echo '<TD>'. $row["CRM"] .'</TD>';
    echo '<TD>'. $row["especialidadeDescricao"] .'</TD>';
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

<script src="js/buscaMedicos.js"></script>

</body>

</html>

<?php $conn->close(); ?>