<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>
<body>
    <ul>
        <?php 
            $nomes = array("Alex", "Vitor", "Luana", "João", "Pedro");

            foreach($nomes as $nome){
                echo "<li>$nome</li>";
            }
        ?>
    </ul>
</body>
</html>