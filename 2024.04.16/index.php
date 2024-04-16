<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice i pętla for</title>
</head>
<body>
    <?php
        //deklaracja tablicy
        $tablica=array("Maks","Lukasz","Wiktor","Noel","Dawid","Aleks","Jakub","Kevin","Kamil");
        //wypisanie 6 elemetu - liczymy elementy tablicy od 0 
        echo '<br>'.$tablica[5];
        //wypisanie całej tablicy
        echo "<br>";
        print_r($tablica);
        //ilość elementów w tablicy - użyjemy do tego funkcji count()
        echo "<br>ilość elementów w tablicy: ";
        echo count($tablica);
        //sortowanie tablic za pomocą funkcji sort()
        echo "<br>posortowanie elementów w tablicy: ";
        sort($tablica);
        print_r($tablica);
        //dodawanie elementu na początek tablicy za pomocą funkcji array_unshift()
        echo "<br>dodanie elementu pierwszego do tablicy: ";
        array_unshift($tablica,"Zuzia");
        print_r($tablica);
        //dodanie elementu na ostatnie miejsce w tablicy za pomocą funkcji array_push()
        echo "<br>dodanie elementu na koniec tablicy: ";
        array_push($tablica,"Maciek");
        print_r($tablica);
        //usuwanie pierwszego elementu z tablicy za pomocą array_shift()
        echo "<br>usunięcie elementu pierwszego z tablicy: ";
        array_shift($tablica);
        print_r($tablica);
        //usuwanie ostatniego elementu tablicy za pomocą array_pop()
        echo "<br>usunięcie elementu na koncu tablicy: ";
        array_pop($tablica);
        print_r($tablica);
        //pomieszanie wartości w tablicy za pomocą funkcji shuffle()
        echo "<br>pomieszanie elementów tablicy: ";
        shuffle($tablica);
        print_r($tablica);

        echo "<h1>Pętla for</h1>";
        // pętle służą do wykonywania czynności, które mają się wykonać kilkanaście razy, ma to na celu zaoszczędzenie czasu i zmienjszenie ilości kodu
        //petla FOR służy do wykonania czynności przez określoną ilość razy - wiemy ile razy ma się wykonać działanie 
        // budowa pętli FOR
        //rozpoczyna się od słowa kluczowego for, następnie w nawiasie podajemy 3 parametry pętli:
            //pierwszy paramert określa zmienną która będzie iteratorem pętli  i jej poczatkową wartość (liczba która zmienia się w każdy przejści pętli i dzięki niej możemy określić koniec pętli)
            //drugi parametr określa warunek zakończenia pętli
            //trzeci parametr określa zmianę iteratora po przejściu pętli np. zwiększenie go o 1
        //następnie dajemy w nawiasie klamnrowy {} instrukcie które mają się wykonywać w pętli

        //działanie ++ to inkrementacja, zwiększenie wartości zmiennej o 1
        //działanie -- to dekrementacja, zmniejszenie wartości o zmiennej 1
        echo "<br>Wypisanie 10 kolejnych liczb za pomocą pętli for";
        for($iterator=1;$iterator<=10;$iterator++){
            echo '<br>Liczba: '.$iterator;
        }
        //wypisanie liczb nieparzystych od 5 do 15
        //+= dodanie wartości i zapisanie jej do zmiennej
        echo "<br>Wypisanie  liczb nieparzystych od 5 do 15 za pomocą pętli for";
        for($iterator=5;$iterator<=16;$iterator+=2){
            echo '<br>Liczba: '.$iterator;
        }
    ?>
</body>
</html>