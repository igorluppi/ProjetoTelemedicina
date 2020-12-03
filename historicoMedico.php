<?php 
  include 'topSite.php'; // Inclui cabcario padrao
?>



<div class="container-fluid pr-5 pl-5">
  <div class="card mt-4 mb-4">
    <div class="card-header bg-dark text-white">
      <h3 class="card-title m-0">Histórico Médico</h3>
    </div>
    <div class="card-body">
    <form action="historicoMedico.php.html" method="post">
        <div class="form-group ">          
        <select class="form-control" id="historicoMedico">
            <option value="-1">Todos</option>
<option  value=3>Ana Santos (id:3)</option><option  value=6>Ana Santos (id:6)</option><option  value=2>Bruno Souza (id:2)</option><option  value=4>Camila Matos (id:4)</option><option  value=1>João da Silva (id:1)</option><option  value=19>João da Silva (id:19)</option><option  value=444>LUISAO (id:444)</option><option  value=5>Paula Camargo (id:5)</option>          </select>



        </div>
    </form>     
      <hr class="mt-3">
      <h3 class="card-title mt-4 mb-4">Agendamentos</h3>      
      <table id="tbHistorico" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Médico</th>
            <th>Paciente</th>
            <th>Data</th>
            <th>Horário</th>
            <th>Ação</th>
          </tr>
        </thead>
           <tbody>           
           <TR><TD>2</TD><TD>Ana Santos (3)</TD><TD>Paciente Testé (3)</TD><TD>18/11/2020</TD><TD>16:40</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=2" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR><TR><TD>4</TD><TD>Bruno Souza (2)</TD><TD>Teste (2)</TD><TD>11/11/2020</TD><TD>19:00</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=4" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR><TR><TD>3</TD><TD>Ana Santos (3)</TD><TD>Fulano de Tal (3)</TD><TD>05/11/2020</TD><TD>20:00</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=3" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR><TR><TD>5</TD><TD>Paula Camargo (5)</TD><TD>Teodoro Silva (5)</TD><TD>01/12/2020</TD><TD>12:00</TD><TD><i redirect="php/deleteScripts.php?tabela=tbconsultasMedico&id=5" class="fas fa-trash-alt text-danger" onclick="dialogDelete(this)" style="cursor:pointer"></i></TD></TD></TR>  
  
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

