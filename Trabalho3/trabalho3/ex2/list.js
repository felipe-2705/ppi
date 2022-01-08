window.onload = function(){
    const campoInteresse = document.querySelector("#interesse"); // seleciona o elemento com o id interesse. O formulario de entrada no caso
    campoInteresse.addEventListener("keyup", e =>{ // adiciona uma funçao para o evento de pressioanr tecla
        if (e.key === "Enter") // verifica se  a tecla que disparou o evento e é a tecla "Enter"
            adicionaInteresse();    // chama funçao   
    });
 }


 function adicionaInteresse(){
     const campoInteresse = document.querySelector("#interesse"); // seleciona o elemento com o id interesse 
     const listaInteresses = document.querySelector("ol"); // seleciona o primeiro elemento do tipo ol
     
     const novoli = document.createElement("li"); // cria um novo elemento do tipo li
     const novospan = document.createElement("span"); // cria um novo elemento do tipo span 
     const novobotao = document.createElement("button"); // cria um novo elemento do tipo button

     novospan.textContent = campoInteresse.value; // adicionando o texto ao elemento span 
     novobotao.textContent = '✖';  // adicionando o texto do botaao 

     novoli.appendChild(novospan); // adiciona o span ao novo elemento li da lista ol
     novoli.appendChild(novobotao); // adiciona o botao ao novo elemento li da lista ol
     listaInteresses.appendChild(novoli); //adiciona aos filhos da lista ol o elemento li 

     novobotao.onclick = function (){ // adiciona funçao para ser executada ao clicar no botao 
         listaInteresses.removeChild(novoli); // remove da lista ol selecionada o elemento li adicionado
     }

     campoInteresse.value = ""; //esvazia o campo de entraada 
    }