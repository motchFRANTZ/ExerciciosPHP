<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>

    <select name="" id="">
        <?php 
            $frutas = array("Maça", "Pera", "Bergamota", "Uva", "Pêssego", "Laranja");
            foreach($frutas as $fruta) {
                echo "<option value=''>$fruta</option>";
            }
        ?>
    </select>

</body>
</html>