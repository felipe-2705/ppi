<?php
function carregaString($arquivo)
{
 $arq = fopen($arquivo, "r");
 $string = fgets($arq);
 fclose($arq);
 return $string;
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST["email"])){
    $email =  trim($_POST["email"]);
};
if(isset($_POST["senha"])){
    $senha =  $_POST["senha"];
};
};

$email_arq = carregaString("../arquivos/email.txt");
$senhaHash_arq =  carregaString("../arquivos/senhaHash.txt");
if($email_arq == $email){
    if(password_verify($senha,$senhaHash_arq)){
        header("Location: sucesso.html");
        exit();
    };
};
header("Location: index.html");
exit();
?>