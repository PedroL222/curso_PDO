<?php

include_once("./config.php");

$nome = "PedroL";
$email = "pedro1@f.com";
$senha = "1234";

try{
    $sql = "INSERT INTO T_usuario(nome,email,senha) VALUES (:nome,:email,:senha)";
    $prepare = $pdo->prepare($sql);

    $prepare->bindValue(":nome","Lupy");
    $prepare->bindValue(":email","lupy@1,com");
    $prepare->bindValue(":senha","9090");

    $count = $prepare->execute();

    echo "$count linhas";

} catch (PDOException $err){
    echo $err->getMessage();
}