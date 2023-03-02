<?php

include_once("./config.php");


try{
    $pdo->beginTransaction();
    $pdo->exec("INSERT INTO T_usuario(nome) VALUES ('Pedro')");
    $pdo->rollBack();
    $pdo->commit();

} catch (PDOException $err){
    echo $err->getMessage();
}