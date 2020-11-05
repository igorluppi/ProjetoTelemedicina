    
    var tbMedicos = $('#tbMedicos').DataTable({
      "language": {
        "decimal": "","emptyTable": "Nenhum rgistro disponínel","info": "Mostrando _START_ - _END_ de _TOTAL_ registros", "infoEmpty": "Mostrando 0 - 0 de 0 registros", "infoFiltered": "(Filtrar de _MAX_ total de registros)", "infoPostFix": "", "thousands": ",", "lengthMenu": "Mostrar _MENU_ ", "loadingRecords": "Carregando...", "processing": "Processando...", "search": "Filtrar: ", "zeroRecords": "Nenhum resultado para pesquisa", "paginate": { "first": "Primeiro", "last": "Último", "next": "Próximo", "previous": "Anterior" },
        "aria": { "sortAscending": ": classificar coluna em ordem crescente", "sortDescending": ": classificar coluna em ordem decrescente" }
      }
    });



    function atualizaTabela(tbMedicos){
        tbMedicos.clear().draw();

        var xhr = new XMLHttpRequest();

        xhr.open("GET", "http://localhost/ProjetosTelemedicina/php/consultas.php?tabela=tbmedicos");
        tbMedicos.clear().draw();

        xhr.addEventListener("load", function(){
            var resposta = xhr.responseText;
            var respostaJSON = JSON.parse(resposta);
            
            for (var i=0 ; i<respostaJSON.length ; i++){
                var jsonAtrr ='{ "medico": '+ respostaJSON[i]['medico'] +',"nome":"'+ respostaJSON[i]['nome'] + '","CRM":"' + respostaJSON[i]['CRM'] + '","especialidade_FK":"'+ respostaJSON[i]['especialidade_FK'] + '"}';

                tbMedicos.row.add( [
                    respostaJSON[i]['medico'], 
                    respostaJSON[i]['nome'], 
                    respostaJSON[i]['CRM'], 
                    respostaJSON[i]['especialidade_descricao'], 
                    respostaJSON[i]['data_cadastro'],
                    "<i style='cursor:pointer' class='fas fa-sync-alt text-info mr-5' infoJson ='"+jsonAtrr+"' onclick='enviaDadosParaAlteracao(this)')></i><i class='fas fa-trash-alt text-danger' style='cursor:pointer' onclick='confirm(\"Confirma a exclusão?\") && removeMedico("+respostaJSON[i]['medico']+");'></i>"]).draw(false);
            }
        })
        
        xhr.send();
    }


    function enviaDadosParaAlteracao(btnObject){
        var jsonString = btnObject.getAttribute("infoJson");
        var respostaJSON = JSON.parse(jsonString);
        document.querySelector("#idMedico").value = respostaJSON["medico"];
        document.querySelector("#medicoNome").value = respostaJSON["nome"];
        document.querySelector("#CRM").value = respostaJSON["CRM"];
        document.querySelector("#especialidade").value = respostaJSON["especialidade_FK"];        
        
        document.querySelector("#btnNovoMedico").className = "btn btn-primary d-none";
        document.querySelector("#btnCancelaAleracaoMedico").className = "btn btn-primary";
        document.querySelector("#btnAlteraMedico").className = "btn btn-primary";        
    }


    function removeMedico(id){
        
        var xhr = new XMLHttpRequest();
        var queryValues = 
        {
            action: "remove", 
            tbName: "tbmedicos",
            columnsNames: "medico",
            columnsValues: id
        };
        var queryValuesJSON = JSON.stringify(queryValues);                
        xhr.open("GET", "http://localhost/ProjetosTelemedicina/php/executeQuery.php?data="+queryValuesJSON);

        xhr.addEventListener("load", function(){
            var resposta = xhr.responseText;
            
            if (resposta.trim() === "OK") {
                alert("Cadastro Removido com sucesso");
                document.querySelector("#formNovoMedico").reset();
                atualizaTabela(tbMedicos);
                
            } else {
                alert("Erro na Exclusão\nMensagem do Servidor: " + resposta);
            }
        })
            
        xhr.send(); 
    }    

    function btnAltera(id, nome, CRM, especialidade){
        alert(id);
        alert(nome);
        alert(CRM);
        alert(especialidade);
        
    }

    atualizaTabela(tbMedicos);
