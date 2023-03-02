<?php

include_once("./config.php");


$email = "pedro1@f.com";
$senha = "1234";


try{
    $sql = "SELECT nome FROM T_usuario";
    $prepare = $pdo->prepare($sql);
    $prepare->bindColumn("idT_usuario",$idT_usuario);

    $res = $prepare->execute();

    while($prepare->fetch(PDO::FETCH_BOUND)){
        echo $idT_usuario;
    }

} catch (PDOException $err){
    echo $err->getMessage();
}