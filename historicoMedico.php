<?php
  include 'php/conn.php';

  $currentPage = 'historicoMedico';
  include 'topSite.php'; // Inclui cabecalho padrao
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
            <option value="-1">Todos</option>
<option  value=2>Dr. Bruno Souza (id:2)</option><option  value=19>Dr. João da Silva (id:19)</option><option  value=1>Dr. João da Silva&#039; (id:1)</option><option  value=444>Dr. LUISAO (id:444)</option><option  value=6>Dra. Ana Santos (id:6)</option><option  value=3>Dra. Ana Santos (id:3)</option><option  value=4>Dra. Camila Matos (id:4)</option><option  value=445>Dra. Maria Joaquina (id:445)</option><option  value=5>Dra. Paula Camargo (id:5)</option><option  value=448>Fafa de Belem (id:448)</option><option  value=450>dr eu (id:450)</option><option  value=453>ggggg (id:453)</option><option  value=452>ghj (id:452)</option><option  value=449>jose (id:449)</option><option  value=451>rttrrt (id:451)</option>          </select>



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
           <TR><TD>18</TD><TD>Paciente Testé <span class="idsTable">(id:1)</span></TD><TD>10/11/2020</TD><TD>12:57</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=18" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR><TR><TD>4</TD><TD>Teste <span class="idsTable">(id:3)</span></TD><TD>11/11/2020</TD><TD>19:00</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=4" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR><TR><TD>19</TD><TD>Teste <span class="idsTable">(id:3)</span></TD><TD>13/11/2020</TD><TD>17:20</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=19" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR><TR><TD>3</TD><TD>Fulano de Tal <span class="idsTable">(id:5)</span></TD><TD>05/11/2020</TD><TD>20:00</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=3" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR><TR><TD>7</TD><TD>Fulano de Tal <span class="idsTable">(id:5)</span></TD><TD>01/11/2020</TD><TD>22:22</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=7" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR><TR><TD>5</TD><TD>Teodoro Silva <span class="idsTable">(id:6)</span></TD><TD>01/12/2020</TD><TD>12:00</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=5" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR><TR><TD>15</TD><TD>Teodoro Silva <span class="idsTable">(id:6)</span></TD><TD>19/11/2020</TD><TD>01:04</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=15" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR><TR><TD>17</TD><TD>Teodoro Silva <span class="idsTable">(id:6)</span></TD><TD>27/11/2020</TD><TD>12:00</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=17" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR>  
  
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