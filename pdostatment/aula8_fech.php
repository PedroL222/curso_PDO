<?php

include_once("./config.php");

$nome = "PedroL";
$email = "pedro1@f.com";
$senha = "1234";

try{
    $sql = "SELECT * FROM T_usuario";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();

    $result = $prepare->fetch(PDO::FETCH_ASSOC);

    print_r($result);

} catch (PDOException $err){
    echo $err->getMessage();
}