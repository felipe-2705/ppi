<?php
require "conexaoMysql.php";
$pdo = mysqlConnect();
try {

  $sql = <<<SQL
  SELECT nome, sexo, email, telefone, cep, logradouro, bairro, cidade, estado,
  peso, altura, tipo_sanguineo
  FROM pessoa INNER JOIN paciente ON pessoa.codigo = codigo_pessoa
SQL;
  $stmt = $pdo->query($sql);
} 
catch (Exception $e) {
  exit('Ocorreu uma falha: ' . $e->getMessage());
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tabelas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

  <style>
    body {
      padding-top: 2rem;
    }
  </style>
</head>

<body>
  <div class="container">
    <h3>Pacientes</h3>
    <table class="table table-striped table-hover">
      <tr>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>CEP</th>
        <th>Logradouro</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Peso</th>
        <th>altura</th>
        <th>Tipo Sanguineo</th>
      </tr>
      <?php
      while ($row = $stmt->fetch()) {
        $nome = htmlspecialchars($row['nome']);
        $sexo  = htmlspecialchars($row['sexo']);
        $email = htmlspecialchars($row['email']);
        $telefone = htmlspecialchars($row['telefone']);
        $cep = htmlspecialchars($row['cep']);
        $logradouro = htmlspecialchars($row['logradouro']);
        $bairro =htmlspecialchars($row['bairro']);
        $cidade = htmlspecialchars($row['cidade']);
        $estado  = htmlspecialchars($row['estado']);
        $peso = htmlspecialchars((string)$row['peso']);
        $altura = htmlspecialchars((string)$row['altura']);;
        $tipo_sanguineo = htmlspecialchars($row['tipo_sanguineo']);
        echo <<<HTML
          <tr>
            <td>$nome</td>
            <td>$sexo</td>
            <td>$email</td>
            <td>$telefone</td> 
            <td>$cep</td>
            <td>$logradouro</td>
            <td>$bairro</td>
            <td>$cidade</td>
            <td>$estado</td>
            <td>$peso</td> 
            <td>$altura</td>
            <td>$tipo_sanguineo</td>
          </tr>      
HTML;
      }
      ?>
    </table>
    <a href="index.html">Mostrar Opções</a>
  </div>

</body>

</html>