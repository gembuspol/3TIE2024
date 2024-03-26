<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Zajęcia 26 marca 2024</title>
</head>
<body>
    <?php
    //stworzenie funkcji, która pobiera wartość i wypisuje jej kwadrat czyli liczba do potęgi 2
    function potega($liczba){
        $wynik=$liczba*$liczba;
        echo "<br> Potęga liczby $liczba to $wynik";
    }
    potega(3);
    potega(12);
    // sprawdzanie typów zmiennych
    $liczba=12;
    $liczba2=43.554;
    $zmienna="tekst";
    echo '<br>Typ zmiennej liczba '.$liczba.' to '.gettype($liczba);
    echo '<br>Typ zmiennej liczba2 '.$liczba2.' to '.gettype($liczba2);
    echo '<br>Typ zmiennej tekst '.$zmienna.' to '.gettype($zmienna);
    //funkcje matematyczne
    //https://www.w3bai.com/pl/php/php_ref_math.html#gsc.tab=0
    //abs - wartość bezwględna
    //round - zaokrąglenie liczby
    //ceil - zaokrąglenie w górę
    //floor - zaokrąglenei w dół
    //pow - potęgowanie liczb

    //pole kwadratu zaokrąglone do 2 miejsc po przecinku
    function kwadrat($a){
        //tradycyjnie liczby $a*$a a my policzymy funkcją
        $wynik=pow($a,2);
        //zaokrąglenie wyniku
        $wynik2=round($wynik,2);
        return $wynik2;
    }
    //wynik nie zostanie wyświetlony bo nie użyliśmy funkcji echo
    kwadrat(5.2);
    //wyświetlanie wyników
    echo '<br>wynik działania to '.kwadrat(5.2);
    echo '<br>wynik działania to '.kwadrat(4.674);
    //przekazanie jednego wyniku funkcji do zmiennej dodatek i wywołanie jeszcze raz tej funkcji z obliczonym wynikiem
    $dodatek=kwadrat(2);
    echo '<br>wynik działania to '.kwadrat($dodatek);
    ?>
</body>
</html>