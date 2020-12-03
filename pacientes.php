<?php 
  $currentPage = 'pacientes';
  include 'topSite.php'; // Inclui cabcario padrao
?>



<div class="container-fluid pr-5 pl-5">
  <div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">
      <h3 class="card-title m-0"><i class="fas fa-user-injured mr-2"></i>Cadastro de Pacientes</h3>
    </div>
    <div class="card-body">
      <form action="https://amorim.eng.br/telemedicina/conteudo-aulas/PGProjetoFinal/ehealth/php/insertScripts.php?tabela=tbpacientes" method="post">
        <div class="form-group ">
          <label class="font-weight-bold">Nome:</label>
          <input type="text" class="form-control" name="inputPacienteNome" placeholder="Digite o nome" value="" required>
        </div>
        <div class="form-group">
          <label class="font-weight-bold">CPF:</label>
          <input type="text" class="form-control" name="inputPacienteCPF" placeholder="Digite o CPF" value="" required>
        </div>
        <div class="form-group">
          <label class="font-weight-bold">Dt nascimento:</label>
          <input class="form-control" type="date" value="" name="inputDataNascimento">
        </div>

        <div class="form-check">
            <input  type="checkbox" class="form-check-input lg-check" name="checkPlano">
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
            <th>Dt nasc.</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
        <TR><TD>1</TD><TD>Paciente Testé</TD><TD>123.123.123-12</TD><TD><i class='fas fa-times text-danger'></i></TD><TD>15/11/1995</TD><TD><a href="pacientes.php@altera=1.html"><i class="fas fa-sync-alt text-info mr-3"></i></a><i redirect="php/deleteScripts.php?tabela=tbpacientes&id=1" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TR><TR><TD>3</TD><TD>Teste</TD><TD>7987987</TD><TD><i class='fas fa-check text-success'></i></TD><TD>05/11/2020</TD><TD><a href="pacientes.php@altera=3.html"><i class="fas fa-sync-alt text-info mr-3"></i></a><i redirect="php/deleteScripts.php?tabela=tbpacientes&id=3" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TR><TR><TD>5</TD><TD>Fulano de Tal</TD><TD>789.456.888-12</TD><TD><i class='fas fa-check text-success'></i></TD><TD>08/02/1950</TD><TD><a href="pacientes.php@altera=5.html"><i class="fas fa-sync-alt text-info mr-3"></i></a><i redirect="php/deleteScripts.php?tabela=tbpacientes&id=5" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TR><TR><TD>6</TD><TD>Teodoro Silva</TD><TD>123456789-00</TD><TD><i class='fas fa-check text-success'></i></TD><TD>06/11/1990</TD><TD><a href="pacientes.php@altera=6.html"><i class="fas fa-sync-alt text-info mr-3"></i></a><i redirect="php/deleteScripts.php?tabela=tbpacientes&id=6" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TR>  
  
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

