window.onload = function (){ // carrega a funçao no load da pagino no browser 
    buttons = document.querySelectorAll("nav button"); // busca uma lista de todos os buttons que são decendentes de um nav;
    for(let button of buttons){ // para todos os bottons carregados 
        button.addEventListener("click", changeTab); // adiciona a funçao changeTab para ser executada no event de click nesses botoes; 
    }

    openTab(0); // executa a funçao opentab no primeiro section. 
}

function changeTab(e){
    const botaoAcionado =  e.target; //pega qual botao foi acionado;
    const lidobotao     = botaoAcionado.parentNode; //retorna o elemento pai do botao acionado no caso o li que o contém.
    const nodes         = Array.from(lidobotao.parentNode.children); // busca o elemento ul pai do li, busca a lista de filhos desse ul, e converte essa lista em um array. ou seja temos acesso agora a todos li filhos de ul em um vetor
    const index         =  nodes.indexOf(lidobotao); // retorna o index no vetor nodes, do li que contem o botao que foi acionado;
    openTab(index); //executa a funçao open tab no index encontrado acima; 
}

function openTab(i){
    const tabActive  = document.querySelector(".tabActive"); // retorna o elemento que pertence a classe tabActive , o primeiro e unico que teremos 
    if(tabActive !== null) // caso algum elemento tabActive seja encontrado . 
        tabActive.className = ""; // removemos a classe tabActive desse elemento

    const buttonActive = document.querySelector(".buttonActive"); // busca o botao que esta na classe buttonActive 
    if(buttonActive !== null)   // caso seja encontrado um botao ja ativo 
        buttonActive.className = "";    // removemos o botão da classe buttonActive 
    
    document.querySelectorAll(".tabs section")[i].className = "tabActive"; //buscamos todos os elemetos section que são descendentes de um classe tabs. pega o i indicado e o atribuimos a classe tabActive. 
    document.querySelectorAll("nav button")[i].className = "buttonActive"; //buscamos todos os buttons descendentes de um nav. pegamos o i-ésimo e atribuimos a classe buttonActive
    
}