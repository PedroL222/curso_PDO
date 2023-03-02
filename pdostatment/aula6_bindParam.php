<?php

include_once("./config.php");

$nome = "PedroL";
$email = "pedro1@f.com";
$senha = "1234";

try{
    $sql = "INSERT INTO T_usuario(nome,email,senha) VALUES (:nome,:email,:senha)";
    $prepare = $pdo->prepare($sql);

    $prepare->bindParam(":nome",$nome,PDO::PARAM_STR);
    $prepare->bindParam(":email",$email,PDO::PARAM_STR);
    $prepare->bindParam(":senha",$senha,PDO::PARAM_STR);

    $prepare->execute();

} catch (PDOException $err){
    echo $err->getMessage();
}