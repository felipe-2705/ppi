<?php

require "conexaoMysql.php";
$pdo = mysqlConnect();
$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";
try {

  $sql = <<<SQL
  SELECT hashsenha
  FROM usuario WHERE email = ? 
  LIMIT 1
SQL;
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);
} 
catch (Exception $e) {
  exit('Ocorreu uma falha: ' . $e->getMessage());
}
if ($row =$stmt->fetch()){
    $senhaHash_db =  $row['hashsenha'];
    if(password_verify($senha,$senhaHash_db)){
        header("Location: sucesso.html");
        exit();
    };
}
header("Location: teste-login.html");
exit();
?>