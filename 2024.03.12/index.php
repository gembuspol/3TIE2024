<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przemek</title>
</head>
<body>
    <h1>Pierwsze zadanie z PHP</h1>
    
    <?php
        $imie = 'Cygan';
        $liczba = 10;
        $liczba1 = 4.5;
        echo "<h3>$imie wyłączył $liczba razy <i>zasilanie</i></h3>";
        echo '<h3>'. $imie .' wyłączył '. $liczba .' razy <i>zasilanie</i></h3>';
        echo $liczba1;
        echo '<br>';
        echo $liczba+$liczba1;
    ?>  

    
</body>
</html>