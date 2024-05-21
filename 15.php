<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <?php 
    $i = 0;
        do {
            if(($i==2 ) || ($i==6) || ($i==10)){
                echo "<div style='background-color: DodgerBlue;'>$i</div>";
            } else {
                echo "<div>$i</div>";
            }
            $i++;
        } while($i < 12);

    ?>

    
</body>
</html>