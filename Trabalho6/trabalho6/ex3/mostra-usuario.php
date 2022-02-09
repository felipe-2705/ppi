<?php

require "conexaoMysql.php";
$pdo = mysqlConnect();

try {

  $sql = <<<SQL
  SELECT email, hashsenha
  FROM usuario
SQL;
  $stmt = $pdo->query($sql);
} 
catch (Exception $e) {
  exit('Ocorreu uma falha: ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta  name="description" content="Pagina desenvolvida para o Sexto trabalho da disciplina de Programação para a internet, Exercício 3.">
        <title>Trabalho 6</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            body {
            padding-top: 2rem;
            }
        </style>
    </head>
    <body>
        <main>
            <div class="container">
                <h3>Usuários Cadastrados</h3>
                <table class="table table-striped table-hover">
                    <tr>
                        <th></th>
                        <th>Email</th>
                        <th>Senha_Hash</th>
                    </tr>
<?php

while($row =$stmt->fetch()){
    $email = htmlspecialchars($row['email']);
    $senhaHash =  htmlspecialchars($row['hashsenha']);
    echo <<<HTML
        <tr>
            <td>$email</td>
            <td>$senhaHash</td>
        </tr>
HTML;
}
?>
                </table>
                <a href="index.html">Menu de opções</a>
            </div>
        </main>
    </body>
</html>