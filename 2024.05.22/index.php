<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Funkcja warunkowa</title>
</head>
<body>
    <?php
    //instrukcja warunkowa - pozwala wykonać działania w zależności od otrzymanych danych
    //budowa funkcji warunkowej
    // if(warunek){
    //      instrukcje
    // }else{
    //      instrukcje    
    // }
    echo "<h2>Sprawdzanie czy liczba jest większa od 5, mniejsza od 5 lub równa 5</h2>";
    $liczba=132;
    if($liczba>5){
        echo "$liczba jest większe od 5";
    }else if($liczba<5){  //}elseif($liczba<5){
        echo "$liczba jest mniejsze od 5";
    }else{
        echo "$liczba jest równe 5";
    }
    //sprawdzimy czy liczba jest podzielna przez 6
    echo "<h2>Sprawdzanie podzielności</h2>";
    //dzielenie modulo oznaczone jest symbolem %
    //modulo to reszta z dzielenia
    if($liczba%6==0){
        echo "$liczba jest podzielna przez 6";
    }else{
        echo "$liczba nie dzieli się przez 6";
    }
    //sprawdzenie czy to jest dany tekst
    echo "<h2>Sprawdzanie tekstu</h2>";
    $nazwisko="Jergas";
    if($nazwisko=="Jergas"){
        echo "To jest Kevin";
    }else {
        echo "To nie jest gaduła";
    }

    ?>
    
</body>
</html>