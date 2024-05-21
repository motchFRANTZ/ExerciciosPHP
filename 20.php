<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>

<body>
    <select value="">
        <?php
        $frutas = array(
            0 => "Maça",
            1 => "Pera",
            2 => "Bergamota",
            3 => "Uva",
            4 => "Pêssego",
            5 => "Laranja"
        );

        foreach($frutas as $key => $fruta){
            echo "<option value='$key'>$fruta</option>";
        }
        ?>

    </select>
</body>

</html>