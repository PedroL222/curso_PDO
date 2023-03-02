<?php

include_once("./config.php");

$nome = "PedroL";
$email = "pedro1@f.com";
$senha = "1234";

try{
    $sql = "SELECT nome FROM T_usuario";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();

    $nomef = $prepare->fetchColumn(0);
    $emailf = $prepare->fetchColumn(0);
        print_r($nomef);
        print_r($emailf);

} catch (PDOException $err){
    echo $err->getMessage();
}