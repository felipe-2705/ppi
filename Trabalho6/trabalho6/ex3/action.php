<?php
require "conexaoMysql.php";
$pdo = mysqlConnect();

$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";
try {

  $sql = <<<SQL
  INSERT INTO usuario (email, hashsenha)
  VALUES (?, ?)
SQL;
  $hashsenha = password_hash($senha, PASSWORD_DEFAULT);
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$email, $hashsenha]);

  header("location: index.html");
  exit();
} 
catch (Exception $e) {  
  if ($e->errorInfo[1] === 1062)
    exit('Usuario já cadastrado: ' . $e->getMessage());
  else
    exit('Falha ao cadastrar os dados: ' . $e->getMessage());
}
?>