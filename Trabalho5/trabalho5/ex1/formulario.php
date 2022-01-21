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
            .box{
                border: 1px solid gray;
            }
        </style>
    
    </head>

    <body>
        <main>
            <div class="container">
                <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        if (isset($_POST["cep"])){
                            $cep = $_POST["cep"];};
                        if (isset($_POST["logradouro"])){
                            $logradouro = $_POST["logradouro"];};
                        if (isset($_POST["bairro"])){
                            $bairro = $_POST["bairro"];};
                        if (isset($_POST["cidade"])){
                            $cidade = $_POST["cidade"];};
                        if (isset($_POST["estado"])){
                            $estado = $_POST["estado"];};
                        
                        $cep = htmlspecialchars($cep);
                        $logradouro = htmlspecialchars($logradouro);
                        $bairro =   htmlspecialchars($bairro);
                        $cidade = htmlspecialchars($cidade);
                        $estado = htmlspecialchars($estado);
                        echo  <<< grid
<div class="container center">
    <h1>Retorno PHP</h1>
    <div class="row gx-2">
        <div class="col-sm box"> $cep </div>
        <div class="col-sm box"> $logradouro </div>
        <div class="col-sm box"> $bairro </div>
        <div class="col-sm box"> $cidade </div>
        <div class="col-sm box"> $estado </div>
    </div>
<div>
grid;
                    };
                ?>
            </div>
        </main>
    </body>
</html>