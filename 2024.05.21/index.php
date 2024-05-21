<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla foreach</title>
</head>
<body>
    <?php
    //deklaracja tablicy
    $tablica=array("sala" => "2.1", "ilosc" => "13", "wiek" => "18", "temperatura" => "za wysoka");
    //wypisanie przykładowego elementu z tablicy asoscjacyjnej
    echo $tablica["wiek"];
    echo "<h2> Wypisanie pętla for</h2>";
    //próba wypisania wartośći za pomocą pętli for
    for($i=0; $i<4;$i++){
        echo $tablica[$i]."<br>";
    }
    echo "<h2> Wypisanie pętla while</h2>";
    //próba wypisania wartośći za pomocą pętli while
    $iterator=0;
    while($iterator<4){
        echo $tablica[$iterator]."<br>";
        $iterator=$iterator+1;
    }
    $tablica2=array("Maks","Zuzia","Kuba","Lukasz","Kacper");
    echo "<h2>Wykorzystanie pętli foreach</h2>";
    //pętla foreach pozwala na wypisanie każdego wiersza tablicy jako osobny wynik. Pętla działa automatycznie do momentu aż są dane w tablicy. Nie ma konieczności znania wielkości tablicy.
    foreach($tablica2 as $wynik){
        echo $wynik."<br>";
    }
    //wykorzystanie pętli foreach do tablicy asoscjacyjnej
    echo "<h3>foreach w tablicy asocjacyjnej<h3>";
    foreach($tablica as $klucz => $wartosc){
        echo "$klucz : $wartosc <br>";
    }
    ?>
</body>
</html>