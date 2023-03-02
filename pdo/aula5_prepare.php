<?php

include_once("./config.php");

$nome = "PedroL";

try{
    $sql = "INSERT INTO T_usuario(nome) VALUES (:nome)";
    $prepare = $pdo->prepare($sql);
    $prepare->execute([
        ':nome' => $nome
    ]);

} catch (PDOException $err){
    echo $err->getMessage();
}