<?php

function mysqlConnect()
{
  $db_host = "fdb26.awardspace.net";
  $db_username = "3084995_felipecastro";
  $db_password = "by9HgCij";
  $db_name = "3084995_felipecastro";
  $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";
  $options = [
    PDO::ATTR_EMULATE_PREPARES => false, 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,    
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
  ];

  try {
    $pdo = new PDO($dsn, $db_username, $db_password, $options);
    return $pdo;
  } 
  catch (Exception $e) {
    exit('Ocorreu uma falha na conexão com o BD: ' . $e->getMessage());
  }
}

?>
