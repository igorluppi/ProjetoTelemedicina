<?php 
  $currentPage = 'consultas';
  include 'topSite.php'; // Inclui cabecalho padrao
?>



<div class="container-fluid pr-5 pl-5">
  <div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">
      <h3 class="card-title m-0"><i class="fas fa-stethoscope mr-2"></i>Cadastro de Consultas</h3>
    </div>
    <div class="card-body">
        <form action="https://amorim.eng.br/telemedicina/conteudo-aulas/PGProjetoFinal/ehealth/php/insertScripts.php?tabela=tbconsultas" method="post">
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
                        <a class="btn btn-secondary" href="consultas.php.html" style="width:120px" role="submit">Limpar</a>
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
            <th>Dt nasc.</th>
          </tr>
        </thead>
        <TR idTB="1" textTB="Paciente Testé" class="cursor-pointer"><TD>1</TD><TD>Paciente Testé</TD><TD>123.123.123-12</TD><TD><i class='fas fa-times text-danger'></i></TD><TD>15/11/1995</TD></TR><TR idTB="3" textTB="Teste" class="cursor-pointer"><TD>3</TD><TD>Teste</TD><TD>7987987</TD><TD><i class='fas fa-check text-success'></i></TD><TD>05/11/2020</TD></TR><TR idTB="5" textTB="Fulano de Tal" class="cursor-pointer"><TD>5</TD><TD>Fulano de Tal</TD><TD>789.456.888-12</TD><TD><i class='fas fa-check text-success'></i></TD><TD>08/02/1950</TD></TR><TR idTB="6" textTB="Teodoro Silva" class="cursor-pointer"><TD>6</TD><TD>Teodoro Silva</TD><TD>123456789-00</TD><TD><i class='fas fa-check text-success'></i></TD><TD>06/11/1990</TD></TR>  
  
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
<TR idTB="6" textTB="Ana Santos" class="cursor-pointer"><TD>6</TD><TD>Ana Santos</TD><TD>78958-RS</TD><TD>Clinica Medica
</TD></TR><TR idTB="3" textTB="Ana Santos" class="cursor-pointer"><TD>3</TD><TD>Ana Santos</TD><TD>65492-PR</TD><TD>Geriatria</TD></TR><TR idTB="2" textTB="Bruno Souza" class="cursor-pointer"><TD>2</TD><TD>Bruno Souza</TD><TD>65487-SP</TD><TD>Pediatria</TD></TR><TR idTB="4" textTB="Camila Matos" class="cursor-pointer"><TD>4</TD><TD>Camila Matos</TD><TD>654545-RJ</TD><TD>Cardiologia</TD></TR><TR idTB="1" textTB="João da Silva" class="cursor-pointer"><TD>1</TD><TD>João da Silva</TD><TD>987485-SP</TD><TD>Geriatria</TD></TR><TR idTB="19" textTB="João da Silva" class="cursor-pointer"><TD>19</TD><TD>João da Silva</TD><TD>987485-SP</TD><TD>Geriatria</TD></TR><TR idTB="444" textTB="LUISAO" class="cursor-pointer"><TD>444</TD><TD>LUISAO</TD><TD>2525252</TD><TD>Clinica Medica
</TD></TR><TR idTB="5" textTB="Paula Camargo" class="cursor-pointer"><TD>5</TD><TD>Paula Camargo</TD><TD>56545-SC</TD><TD>Neurologia</TD></TR>

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

