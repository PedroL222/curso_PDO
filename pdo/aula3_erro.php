<?php

include_once("./config.php");


try{
    $pdo->exec("SELECT * FROM T_usuari");

} catch (PDOException $err){
    echo "Codigo SQlSTATE:" . $pdo->errorCode();
    echo "\n";

    print_r($pdo->errorInfo());
}