<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PDO</title>
</head>
<body>
    <?php include_once("./config.php");  
    ?>

    <form method="post" action="./pdostatment/aula15_seguranca.php">
        <div style="display: flex; flex-direction: column;">
            <input name="nome" type="text">
            <input name="email" type="text">
            <input name="senha" type="text">
            <button type="submit">Ir</button>
        </div>
    </form>

    <script></script>
</body>
</html>