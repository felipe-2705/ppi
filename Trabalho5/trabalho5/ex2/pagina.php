<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta  name="description" content="Pagina desenvolvida para o Quinto trabalho da disciplina de Programação para a internet, Exercício 1.">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .center{
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                position: absolute;
            }
        </style>
    
    </head>

    <body>
        <div class="container center">
        <?php
                $produtos = [
                    "bicicleta",
                    "patinete",
                    "bola",
                    "video game",
                    "xadrez",
                    "boneco",
                    "peão",
                    "pipa",
                    "Biloca",
                    "cata-vento"
                ];
                
                $descricoes = [
                    "bicicle ergometrica max plus m2",
                    "patinete eletrico com 200h de bateria",
                    "Feita de couro de bufalo",
                    "Ultima gerações dos consoles entendo",
                    "Jogo o jogo mais jogado desde as eras antigas",
                    "parece uma pessoa mas nao é .... eu acho que nao",
                    "gira gira gira gira gira gira gira ",
                    "feita de varas de bambu e folhas de seda",
                    "verde azul amarela olho de gato, talvez!!!",
                    "gira gira gira gira gira gira gira mas em outra direçao dessa vez. "
                ];
                echo <<< tableheader
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Produtos</th>
            <th scope="col">Descriçao</th>
        </tr>
    </thead>
<tbody>
tableheader;
                $qde  = (int)$_GET["qde"];
                for($i=1;$i<=$qde;$i++){
                    $index = rand(0,9);
                    echo <<< tablerows
<tr>
    <th scope="row">$i</th>
    <td> $produtos[$index] </td>
    <td> $descricoes[$index] </td>
</tr>
tablerows;
                };
                echo<<<tablefoot
</tbody>
</table>
tablefoot;
        ?>
        </div>
    </body>
</html>