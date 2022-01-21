<?php
function salvaString($string, $arquivo)
{
 $arq = fopen($arquivo, "w");
 fwrite($arq, $string);
 fclose($arq);
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST["email"])){
    $email =  trim($_POST["email"]);
};
if(isset($_POST["senha"])){
    $senha =  $_POST["senha"];
};
};
$senhahash = password_hash($senha, PASSWORD_DEFAULT);

salvaString($email,"../arquivos/email.txt");
salvaString($senhahash,"../arquivos/senhaHash.txt");
header("Location: index.html");
exit();
?>