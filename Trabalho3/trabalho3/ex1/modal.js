window.onload = function(){ // adiciiona essa funçao anomima para ser carrega no carregamento da pagina web
    const modal = document.querySelector(".modal"); // seleciona o primeiro elemento da classe modal
    const buttonClose = modal.querySelector(".buttonClose"); // seleciona o primeiro elemento da clase buttonClose
    buttonClose.addEventListener("click", () => modal.style.display = "none" ); // adiciona um função anonima para o evento de click no elemento buttonclose para remover o elemento modal do layout
    
    const buttonOpenModal = document.getElementById("btnOpenModal"); // selecionando o elemento com o id "btnOpenModal"
    buttonOpenModal.addEventListener("click", () => modal.style.display='block'); // Adiciona uma funçao anonima para o evento de click do elemento buttonopenmodal para adiciona-lo ao layout como um block.
}