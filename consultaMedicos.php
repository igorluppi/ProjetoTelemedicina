<?php 
  include 'topSite.html'; // Inclui cabcario padrao
?>

            <div class="container-fluid pr-5 pl-5">

                <div class="card mt-4">
                    <div class="card-header bg-dark text-white">
                        <h3 class="card-title m-0">Selecione o Médico</h3>
                    </div>
                    <div class="card-body">

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
                                <tr idDB="1">
                                    <td>1</td>
                                    <td>Paulo Silva</td>
                                    <td>321.456.798-78</td>
                                    <td>Cirugião Geral</td>
                                </tr>
                                <tr idDB="2">
                                    <td>2</td>
                                    <td>João Lara</td>
                                    <td>856.555.744-14</td>
                                    <td>Geriatra</td>
                                </tr>
                                <tr idDB="3">
                                    <td>3</td>
                                    <td>Ana Santos</td>
                                    <td>088.154.987-58</td>
                                    <td>Pediatra</td>
                                </tr>
                                <tr idDB="4">
                                    <td>4</td>
                                    <td>Alessandra Marinho</td>
                                    <td>558.977.987-87</td>
                                    <td>Dermatologista</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        $(document).ready(function () {
            $('#tbMedicos').DataTable({
                "language": {
                    "decimal": "",
                    "emptyTable": "Nenhum rgistro disponínel",
                    "info": "Mostrando _START_ - _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 - 0 de 0 registros",
                    "infoFiltered": "(Filtrar de _MAX_ total de registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ ",
                    "loadingRecords": "Carregando...",
                    "processing": "Processando...",
                    "search": "Filtrar: ",
                    "zeroRecords": "Nenhum resultado para pesquisa",
                    "paginate": {
                        "first": "Primeiro",
                        "last": "Último",
                        "next": "Próximo",
                        "previous": "Anterior"
                    },
                    "aria": {
                        "sortAscending": ": classificar coluna em ordem crescente",
                        "sortDescending": ": classificar coluna em ordem decrescente"
                    }
                }
            });
        });
    </script>
    <script type="text/javascript" src="vendor/DataTables/datatables.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>