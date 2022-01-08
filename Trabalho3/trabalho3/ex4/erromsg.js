window.onload = function(){ // funçao para ser carregada ao inciar a página 
    document.forms.formCadastro.onsubmit = validaForm; //Adiciona a funçao validaForm para ser executada ao submeter o formulario 
}

function validaForm (e){
    let form =  e.target; //seleciona  o formulario que foi ativado 
    let formValido = true; // seta uma booleano para true para verificar se o formulario esta valido 

    const spanUsuario = form.usuario.nextElementSibling; //pega o proximo elemento irmao do input usuario 
    const spanSenha   = form.senha.nextElementSibling; // pega o proximo elemento irmao do input senha 
    const spanEmail   = form.email.nextElementSibling; // pega o proximo elemento irmao do input email 

    // seta o text dos spans selecionado a cima para um texto vazio 
    spanUsuario.textContent = "";
    spanSenha.textContent = "";
    spanEmail.textContent = "";

    if(form.usuario.value === ""){ // se o formulario usuario esta vazio 
        spanUsuario.textContent = 'O usuário deve ser preenchido'; // adiciona a mensagem de erro no spanUsuario
        formValido  = false; // invalida o formulario
    }

    if(form.senha.value === ""){ // se o formulario senha esta vazio 
        spanSenha.textContent = 'A senha deve ser preenchida'; // adiciona a mensagem de erro no spanSenha
        formValido  = false; // invalida o formulario
    }

    if(form.email.value === ""){ // se o formulario email esta vazio 
        spanEmail.textContent = 'O email deve ser preenchido'; // adiciona a mensagem de erro no spanEmail
        formValido  = false; // invalida o formulario
    }
    return formValido; // retorna true se estiver valido ou false se estiver invalido 
}