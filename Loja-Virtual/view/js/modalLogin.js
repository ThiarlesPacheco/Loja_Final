const modal = document.querySelector(".fade");

//ABRIR MODAL
function modalLogin(){
    modal.classList.add("activeLogin");
}

//FECHAR MODAL
function modalClose(){
    modal.classList.remove("activeLogin");
}

//FECHAR AO CLICAR NA TELA ESCURA
function close(){
    modal.classList.remove("activeLogin");
}
modal.addEventListener('click', function(e){
    if(e.target == this) close();
})