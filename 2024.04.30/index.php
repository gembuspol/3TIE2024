<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for i while</title>
</head>
<body>
    <?php
        //wypisanie wartości za pomocą pętli for
        echo "<h3> pętla for</h3>";
        for($i=2;$i<=7;$i++){
            echo '<br> Liczba '.$i;
        }
        //wypisanie wartości za pomocą pętli while
        echo "<h3> pętla while</h3>";
        $w=2;
        while($w<=7){
            echo '<br> Liczba '.$w;
            $w++;
        }
        //wypisanie wartości parzystych od 10 do 20
        //za pomocą pętli for
        echo "<h3> pętla for, liczby parzyste</h3>";
        for($i=10;$i<=20;$i+=2){
            echo '<br> Liczba '.$i;
        }
        //za pomocą pętli while
        echo "<h3> pętla while, liczby parzyste</h3>";
        $w=10;
        while($w<=20){
            echo '<br> Liczba '.$w;
            $w=$w+2;
        }
        //wypisywanie danych z tablicy za pomocą pętli
        //tworzenie tablicy
        $tablica=array("Maks","Lukasz","Wiktor","Noel","Dawid","Aleks","Jakub","Kevin","Kamil");
        //wypisanie danych z tablicy za pomocą pętli for
        echo "<h3> wypisywanie danych z tablicy, pętla for</h3>";
        for($i=0;$i<9;$i++){
            echo '<br> Osoba to '.$tablica[$i];
        }
        //wypisanie danych z tablicy za pomocą pętli for
        echo "<h3> wypisywanie danych z tablicy, pętla while</h3>";
        $w=0;
        while($w<9){
            echo '<br> Osoba to '.$tablica[$w];
            $w=$w+1;
        }
    ?>
</body>
</html>