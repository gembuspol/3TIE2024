<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zajęcia 3 i 4</title>
</head>
<body>
    <h1>operacje na zmiennych</h1>
    <?php
        //deklaracja zmiennych
        $liczba1=12;
        $liczba2=34.5;
        $liczba3=65656;
        //wypisanie zmiennych na ekran - standardowe wyjście
        echo $liczba1;
        echo "<br>";
        echo "To jest liczba $liczba2 wypisana za pomocą cudzysłowia";
        echo "<br>";
        echo 'to jest liczba '.$liczba3.' - wypisanie zmiennej z wykorzystanie apostrofu';
        //operacje matematyczne na zmiennych
        echo "<br><br>";
        $dodawanie=$liczba1+$liczba2;
        echo "Wynik dodawania dwóch zmiennych to: $dodawanie";

        //deklaracja funkcji
        //funkcja służy do wywołania kodu, który został zapisany wcześniej
        //funkcja składa się z deklaracji funkcji - słowo "function" i nazwy funkcji i parametrów np. function ileOsob(lista)
        //oraz z ciała funkcji zawartej między nawaisami klamrowymi {}, czyli z instrukcji jakie są do wykonania
        
        //funkcja powitanie zwróci napis "witaj w programie"
        //deklaracja funkcji
        function powitanie()
        {
            echo "<br>";
            echo "witaj w programie";
            echo "<br>";
        }
        //wywołanie funkcji
        powitanie();

        //funkcja srednia pobiera dwie liczby i liczy ich średnią
        //deklaracje funkcji srednia
        function srednia($liczba1,$liczba2)
        {
            $srednia=($liczba1+$liczba2)/2;
            echo "<br> Wynik sredniej to: $srednia <br>";
        }

        //wywołanie funkcji
        srednia(12,18);
        srednia(12.5,11.5);
    ?>
</body>
</html>