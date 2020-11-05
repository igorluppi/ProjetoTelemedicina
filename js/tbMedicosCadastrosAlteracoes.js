var btnNovoMedico = document.querySelector("#btnNovoMedico");
var btnAlteraMedico = document.querySelector("#btnAlteraMedico");


btnNovoMedico.addEventListener("click", function(e){
    //e.preventDefault();
    var form = document.querySelector("#formNovoMedico");
    var medicoNome = form.medicoNome.value;
    var CRM = form.CRM.value;
    
    var especialidadeOption = form.especialidade;
    var especialidade_FK = especialidadeOption[especialidadeOption.selectedIndex].value;


    var actualDate = new Date().toISOString().slice(0, 19).replace('T', ' ');
    
    var queryValues = 
    {
        action: "insert", 
        tbName: "tbmedicos",
        columnsNames: ["nome", "CRM",  "especialidade_FK",  "data_cadastro"],
        columnsValues: [medicoNome, CRM, especialidade_FK,  actualDate]
    };

    var queryValuesJSON = JSON.stringify(queryValues);

    var xhr = new XMLHttpRequest();

    xhr.open("GET", "http://localhost/ProjetosTelemedicina/php/executeQuery.php?data="+queryValuesJSON);

    xhr.addEventListener("load", function(){
        var resposta = xhr.responseText;
        
        if (resposta.trim() === "OK") {
            alert("Cadastro Adicionado com sucesso");
            document.querySelector("#formNovoMedico").reset();
            atualizaTabela(tbMedicos);
        } else {
            alert("Erro no cadastro\nMensagem do Servidor: " + resposta);
        }
    })
        
    xhr.send(); 
})

btnAlteraMedico.addEventListener("click", function(e){
 //e.preventDefault();
 var form = document.querySelector("#formNovoMedico");
 var medicoNome = form.medicoNome.value;
 var CRM = form.CRM.value;
 
 var especialidadeOption = form.especialidade;
 var especialidade_FK = especialidadeOption[especialidadeOption.selectedIndex].value;

 var idMedicoForm = form.idMedico.value;

 var actualDate = new Date().toISOString().slice(0, 19).replace('T', ' ');

 var queryValues = 
 {
     action: "update", 
     tbName: "tbmedicos",
     columnsNames: ["nome", "CRM",  "especialidade_FK",  "data_cadastro"],
     columnsValues: [medicoNome, CRM, especialidade_FK,  actualDate],
     idMedico: idMedicoForm
     
     
 };

 var queryValuesJSON = JSON.stringify(queryValues);

 var xhr = new XMLHttpRequest();
 
 xhr.open("GET", "http://localhost/ProjetosTelemedicina/php/executeQuery.php?data="+queryValuesJSON);

 xhr.addEventListener("load", function(){
     
    var resposta = xhr.responseText;
     if (resposta.trim() === "OK") {
         alert("Cadastro Alterado com sucesso");
         document.querySelector("#formNovoMedico").reset();
         atualizaTabela(tbMedicos);
     } else {
         alert("Erro no cadastro\nMensagem do Servidor: " + resposta);
     }
 })
     
 xhr.send();

 


})