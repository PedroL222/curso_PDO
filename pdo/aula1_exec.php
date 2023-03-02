<?php

include_once("./config.php");


try{
    $count = $pdo->exec("DELETE  FROM T_usuario");
    echo "$count linhas afetadas";

} catch (PDOException $err){
    echo $err->getMessage();
}