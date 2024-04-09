<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice wielowymiarowe, asocjacyjne i funkcje</title>
</head>
<body>
    <?php
        //tablica jest to specjalny typ danych, który pozwala przechowywać wiele równych wartości w sobie
        //deklaracja tablicy
        $tablica[0]="test";
        $tablica[1]=11;
        $tablica[2]=11.4;
        //inny sposób deklaracji tablicy
        $dane=array("Ola",12,15.3,"Test");
        //wypisanie wszystkich elementów tablicy
        print_r($dane);
        //wypisanie pojedynczego elementu
        echo "<br> $dane[0]";
        echo "<br> $dane[1]";
        echo "<br> $dane[2]";
        echo "<br> $dane[3]";
        //tablice wielowymiarowe
        //służą do przechowywania większej ilości danych. Możemy porównać tą strukturę danych do tabeli która ma w jednym wierszu kilka kolumn i w każdym polu przechowuje wartość
        //deklaracja tablicy dwuwymiarowej - sposób 1
        $tabdwuwymiar[0][0]="a";
        $tabdwuwymiar[0][1]="b";
        $tabdwuwymiar[1][0]=1;
        $tabdwuwymiar[1][1]=2;
        //wypisanie zawartości tablicy dwuwymiarowej
        echo "<br> tablica dwuwymiarowa 1 <br>";
        print_r($tabdwuwymiar);
         //deklaracja tablicy dwuwymiarowej - sposób 2
         $tab2=array(
            array("test","dwa","zapis"),
            array(1,2,3),
            array(1.2,4.3,4.7)
         );
         echo "<br> tablica dwuwymiarowa 2 <br>";
         print_r($tab2);

         echo "<h1>Tablice asocjacyjne</h1>";
         //tablice asocjacyjne są to tablice, które zamiast liczb w indeksach, zawierają nazwy. Ma to na celu ułatwienie dostępu do danych i łatwiejszego poruszania się po tablicach. Na przykład jak indeksy będą się nazwyać -"imie", "nazwisko", "klasa" - będziemy od razu wiedzieli co tam wpisać i łatwiej będizemy mogli operawć na tablicy niż liczyć ile jest kolumn i podawać numer
         //deklaracja 1 sposób
         $asoscjacja['imie']="Kamil";
         $asoscjacja['nazwisko']="Ślimak";
         $asoscjacja['wiek']=18;
         //wypisanie wartości
         echo "<br>";
         print_r($asoscjacja);
         echo "<br>";
         echo 'nazwisko: '.$asoscjacja['nazwisko'];

         //tablica asoscjacyjna dwuwymiarowa
         //kraje na kontynentach
         echo "<br><br>";
         $kraj['Europa']=array("Polska","Włochy","Niemcy","San Marino","Wielka Brytania");
         $kraj['Azja']=array("Kazachstan","Butan","Kambodża","Indonezja");
         $kraj['Afryka']=array("Republika Środkowo Afrykańska","Nigeria","Senegal");
         print_r($kraj);
         echo '<br>Kraj dla Europy, indeks 2'.$kraj['Europa'][2];
         sort($kraj['Europa']);
         echo '<br>Kraj dla Europy, indeks 2'.$kraj['Europa'][2];



    ?>
</body>
</html>