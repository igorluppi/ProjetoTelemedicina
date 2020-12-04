var tbPacientes = $('#tbPacientes').DataTable({
    "language": {
      "decimal": "","emptyTable": "Nenhum rgistro disponínel","info": "Mostrando _START_ - _END_ de _TOTAL_ registros", "infoEmpty": "Mostrando 0 - 0 de 0 registros", "infoFiltered": "(Filtrar de _MAX_ total de registros)", "infoPostFix": "", "thousands": ",", "lengthMenu": "Mostrar _MENU_ ", "loadingRecords": "Carregando...", "processing": "Processando...", "search": "Filtrar: ", "zeroRecords": "Nenhum resultado para pesquisa", "paginate": { "first": "Primeiro", "last": "Último", "next": "Próximo", "previous": "Anterior" },
      "aria": { "sortAscending": ": classificar coluna em ordem crescente", "sortDescending": ": classificar coluna em ordem decrescente" }
    },
    "pageLength": 5,
    "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, 'Todos']]    
});

var tbMedicos = $('#tbMedicos').DataTable({
    "language": {
      "decimal": "","emptyTable": "Nenhum rgistro disponínel","info": "Mostrando _START_ - _END_ de _TOTAL_ registros", "infoEmpty": "Mostrando 0 - 0 de 0 registros", "infoFiltered": "(Filtrar de _MAX_ total de registros)", "infoPostFix": "", "thousands": ",", "lengthMenu": "Mostrar _MENU_ ", "loadingRecords": "Carregando...", "processing": "Processando...", "search": "Filtrar: ", "zeroRecords": "Nenhum resultado para pesquisa", "paginate": { "first": "Primeiro", "last": "Último", "next": "Próximo", "previous": "Anterior" },
      "aria": { "sortAscending": ": classificar coluna em ordem crescente", "sortDescending": ": classificar coluna em ordem decrescente" }
    },
    "pageLength": 5,
    "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
  });

document.querySelectorAll('#tbMedicos tr')
.forEach(e => e.addEventListener("click", function() {
    var id = e.getAttribute("idTB");
    var text = e.getAttribute("textTB");
    if (id !== null){        
        document.querySelector("#inputNomeMedico").value = id +" - "+text;
        document.querySelector("#inputIDMedico").value = id;
    }      
}));


document.querySelectorAll('#tbPacientes tr')
.forEach(e => e.addEventListener("click", function() {
    var id = e.getAttribute("idTB");
    var text = e.getAttribute("textTB");
    
    
    if (id !== null){        
        document.querySelector("#inputNomePaciente").value = id +" - "+text;
        document.querySelector("#inputIDPaciente").value = id;
    }    
}));