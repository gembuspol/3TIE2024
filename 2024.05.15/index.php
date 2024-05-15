<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Sprawdzanie liczb z wykorzystaniem pętli</h1>";
        $liczba=69;
        echo "<h2>Wybraliśmy liczbę 69</h2>";
        //sprawdzamy teraz za pomocą pętli for jaki bedzie wynik dzielenia przez każda z liczb
        for($i=1;$i<=69;$i++){
            echo 'Wynik dzielenia liczby'.$liczba.' przez '.$i.' to: '.$liczba/$i.'<br>';
        }
        //wykorzystanie pętli while
        echo "<br><br><h2> pętla while</h2>";
        $licznik=1;
        while($liczba>=$licznik){
            echo 'Wynik dzielenia liczby'.$liczba.' przez '.$licznik.' to: '.$liczba/$licznik.'<br>';
            $licznik=$licznik+1;
        }
    ?>
</body>
</html>