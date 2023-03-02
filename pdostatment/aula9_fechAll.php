<?php

include_once("./config.php");

$nome = "PedroL";
$email = "pedro1@f.com";
$senha = "1234";

try{
    $sql = "SELECT * FROM T_usuario";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();

    $results = $prepare->fetchAll(PDO::FETCH_ASSOC);
    // $i = 0;

    // while ($i < 4){
    //     echo"id " . $results[$i]['idT_usuario'] . "<br>";
    //     echo "nome " . $results[$i]['nome'] . "<br>";
    //     echo "email " . $results[$i]['email'] . "<br>";
    //     echo "senha " . $results[$i]['senha'] . "<br>";
    //     $i++;
    // }

    foreach ($results as $linha) {
        echo $linha['nome'] . "<br>";
    }

} catch (PDOException $err){
    echo $err->getMessage();
}