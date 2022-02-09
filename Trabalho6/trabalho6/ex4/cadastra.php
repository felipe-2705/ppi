<?php
require "conexaoMysql.php";
$pdo = mysqlConnect();

$nome = $_POST["nome"] ?? "";
$sexo  = $_POST["sexo"] ?? "";
$email = $_POST["email"] ?? "";
$telefone = $_POST["telefone"] ?? "";
$cep = $_POST["cep"] ?? "";
$logradouro = $_POST["logradouro"] ?? "";
$bairro = $_POST["bairro"] ?? "";
$cidade = $_POST["cidade"] ?? "";
$estado  = $_POST["estado"] ?? "";
$peso = intval($_POST["peso"] ?? "");
$altura = floatval($_POST["altura"] ?? "");
$tipo_sanguineo = $_POST["tipo_sanguineo"] ?? "";

$sql1 = <<<SQL
  INSERT INTO pessoa (nome, sexo, email, telefone, cep, logradouro,
                     bairro, cidade, estado)
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
SQL;

$sql2 = <<<SQL
  INSERT INTO paciente
    (peso, altura, tipo_sanguineo, codigo_pessoa)
  VALUES (?, ?, ?, ?)
SQL;

try{
    $pdo->beginTransaction();
    $stmt1 = $pdo->prepare($sql1);
    if (!$stmt1->execute([
      $nome, $sexo, $email, $telefone, $cep, $logradouro,
      $bairro, $cidade, $estado
    ])) throw new Exception('Falha na primeira inserção');
    $codigoPessoa = $pdo->lastInsertId();
    $stmt2 = $pdo->prepare($sql2);
  if (!$stmt2->execute([
    $peso, $altura, $tipo_sanguineo, $codigoPessoa
  ])) throw new Exception('Falha na segunda inserção');
  $pdo->commit();

  header("location: index.html");
  exit();
}catch (Exception $e) {
    $pdo->rollBack();
    if ($e->errorInfo[1] === 1062)
      exit('Dados duplicados: ' . $e->getMessage());
    else
      exit('Falha ao cadastrar os dados: ' . $e->getMessage());
  }
  
?>