<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta  name="description" content="Pagina desenvolvida para o Quarto trabalho da disciplina de Programação para a internet, Exercício 3.">
        <title>Trabalho5</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <style>
        .box{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 1.5rem;
            width: fit-content;
            padding: 20px;
            background-color: #eee;
            border: 0.8px solid #aaa;
            border-radius: 10px;
            position: absolute;
            left: 50%;
            top: 50% ;
            transform: translate(-50%, -50%);
        }
    </style>
    <body>
        <main>
            <div class="container box">
<?php
function carregaString($arquivo)
{
 $arq = fopen($arquivo, "r");
 $string = fgets($arq);
 fclose($arq);
 return $string;
}
$email = carregaString("../arquivos/email.txt");
$senhaHash =  carregaString("../arquivos/senhaHash.txt");
$email = htmlspecialchars($email);
$senhaHash = htmlspecialchars($senhaHash);
echo <<< resultado
<div>
    Seu email é <b> $email </b> 
</div>
<div>
    O hash da sua senha é <b> $senhaHash </b>
</div>
resultado;
?>
            </div>
        </main>
    </body>
</html>