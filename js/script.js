var tbIDMedico = document.querySelector(".trIDMedico");

document.querySelectorAll('#tbMedicos tr')
.forEach(e => e.addEventListener("click", function() {
    var id = e.getAttribute("idDB");
    if (id !== null){
        alert(id);
    }    
}));

