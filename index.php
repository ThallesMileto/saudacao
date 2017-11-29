<?php
    include("classe/conexão.php");

    $consulta = "SELECT * FROM teste";
    $con = $mysqli->query($consulta) or die ($mysqli->error);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>title</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <table border = "1">
            <tr>
                <td>id</td>
                <td>Saudação</td>
            </tr>
            <?php while($dado = $con->fetch_array()){?>
            <tr>
                <td>1</td>
                <td>Olá, Mundo</td>

            <?php } ?>
        </table>
        
    </body>
</html>