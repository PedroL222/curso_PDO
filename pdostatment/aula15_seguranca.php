<?php

include_once("../config.php");

$nome = strip_tags($_POST['nome']);
$email = strip_tags($_POST['email']);
$senha = strip_tags($_POST['senha']);

try{
    $sql3 = "DELETE FROM T_usuario";

    $prepare3 = $pdo->prepare($sql3);
    $prepare3->execute();

    $sql = "INSERT INTO T_usuario(nome,email,senha) VALUES (:nome,:email,:senha)";
    $prepare = $pdo->prepare($sql);

    $prepare->bindParam(":nome",$nome,PDO::PARAM_STR);
    $prepare->bindParam(":email",$email,PDO::PARAM_STR);
    $prepare->bindParam(":senha",$senha,PDO::PARAM_STR);
    
   $prepare->execute();

   $sql2 = "SELECT * FROM T_usuario";
   $prepare2 = $pdo->prepare($sql2);

    $prepare2->execute();

    $res = $prepare2->fetchAll(PDO::FETCH_ASSOC);


    foreach($res as $linha){
        echo $linha['senha'];
    }

} catch (PDOException $err){
    echo $err->getMessage();
}