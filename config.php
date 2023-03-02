<?php

$servidor = "localhost";
$dbname = "curso_pdo";
$usuario = "root";
$senha = "root";

$pdo = new PDO("mysql:host=$servidor;dbname=$dbname",$usuario,$senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

