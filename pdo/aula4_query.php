<?php

include_once("./config.php");

$nome = "Pedro";

try{
    $sql = "SELECT * FROM T_usuario WHERE nome='$nome'";
    $res = $pdo->query($sql);
    foreach($res as $linha){
        print_r($linha[1]);
    }

} catch (PDOException $err){
    echo $err->getMessage();
}