<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice w php</title>
</head>
<body>
    <h1>Tablice w php</h1>
    <?php
        //tablica to zmienna, która przechowuje w sobie wiele danych w sposoób uporządkowany
        //deklarujemy tablicę za pomocą $, następnie nazwa tablicy, a potem [] nawiasy kwadratowe w których podajemy indeksy
        //indekst to kolejny numer zawartości tablicy. Indeksy mogą występować w postaci liczbowej - wtedy rozpoczynamy numeracje od 0; lub w postaci ciągu znaków - klucza
        $klasa[0]="Jakub";
        $klasa[1]=NULL;
        $klasa[2]="Kevin";
        $klasa[3]="Szymon";
        echo "<br> $klasa[0]";
        //Zmiana wartości w tablicy
        $klasa[1]=5;
        $klasa[4]=17.2;
        echo "<br> $klasa[1]";
        echo "<br> $klasa[4]";
        //działania na tablicy - tak samo jak na zmiennych
        echo '<br>Suma dwóch elementów tablicy o indeksach 1 i 4:  '.$klasa[4]+$klasa[1];
    ?>
</body>
</html>