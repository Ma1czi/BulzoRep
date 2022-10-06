<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Zad1
        echo "Zad1<br>";
        $a = 5;
        if($a==0){echo "Podałeś 0";}
        elseif ($a%2==0){
            echo "Dupa";
        }
        else{
            echo "Nieparzysta";
        }
        echo "<br><br>";
        //Zad2
        echo "Zad2<br>";
        $a = 13;
        $b = 8;
        $warunek = $a > $b;
        if($warunek){
            echo "Większa jest liczba a = $a";
        }
        else{
            echo "Większa jest liczba b = $b";
        }
        echo "<br><br>";
        //Zad3
        $a = 2;
        $b = 3;
        $c = 5;
        $d = 1;
        $m = $a;
        if($m < $b){$m = $b;}
        if($m < $c){$m = $c;}
        if($m < $d){$m = $d;}
        echo "Największa z liczb to $m<br><br>";
        //Zad4
        echo "Zad4<br>";
        $a = 1;
        $b = 4; 
        $c = 3;
        echo "Porównujemy liczby: $a, $b, $c<br>";
        $min = $a;
        if ($b < $min){$min = $b;}
        if ($c < $min){$min = $c;}
        $max = $a;
        if($b > $max){$max =$b;}
        if($c > $max){$max = $c;}
        if($a != $min && $a != $max) {$mid = $a;}
        if($b != $min && $b != $max) {$mid = $b;}
        if($c != $min && $c != $max) {$mid = $c;} 
        echo "Kolejność liczb licząc od najwiekszej to: $max, $mid, $min<br><br>";
        //Zad5
        echo "Zad5<br>";
        $a = 10;	
        $b = 5;	
        $c = 18;	
        $d = 1;	
        echo "porównujemy liczby: $a, $b, $c, $d</br>";	
        if ($a < $b && $a < $c && $a < $d) {$l1 = $a;} 
        elseif ($b < $a && $b < $c && $b < $d) {$l1 = $b;}	
        elseif ($c < $a && $c < $b && $c < $d) {$l1 = $c;}
        else $l1 = $d;  
        $l4 = $a; 
        if ($b > $l4) {$l4 = $b;}  
        if ($c > $l4) {$l4 = $c;}  
        if ($d > $l4) {$l4 = $d;}	 
        if($a != $l1 && $a != $l4) {$m2 = $a;}
        if($b != $l1 && $b != $l4) 	{
            $m1 = $b;	(empty($m2) ? $m2 = $b : $m2 = $m2);
        }
        if($c != $l1 && $c != $l4) 
        {
            $m1 = $c;	(empty($m2) ? $m2 = $c : $m2 = $m2);
        }
        if($d != $l1 && $d != $l4) {$m1 = $d; $m2 = $m2;}
        ($m1 > $m2 ? $l2 = $m2 : $l2 = $m1);
        ($m1 < $m2 ? $l3  = $m2 : $l3  = $m1);    	
        echo "większa z liczb to $l4, $l3, $l2, $l1"; 	
        echo "<br><br>";	
        //Zad6
        echo "Zad6 <br>";
        $a = 1; 
        $b = 2;
        $c = 1;
        $delta = $b * $b - 4 * $a * $c; 
        if ($delta > 0)
        {
            $x1 = (-$b - sqrt($delta)) / 2 * $a; 
            $x2 = (-$b + sqrt($delta)) / 2 * $a;
            echo "posiada dwa pierwiastki x1 = $x1, x2 = $x2";
        }
        else if ($delta == 0)
        {
            $x = -$b / 2 * $a;
            echo " posiada jeden pierwiastek x = $x";
        }
        else echo " nie posiada pierwiastków";
        echo "<br><br>";
        //Zad7
        echo "Zad7 <br>";
        $liczba1 = 4;
        $liczba2 = 2;
        $wybor = '-';
        switch ($wybor)
        {
        case "+":   echo $liczba1+$liczba2;
        break;
        case "-":   echo $liczba1-$liczba2;
        break;
        case "*":   echo $liczba1*$liczba2;
        break;
        case "/":   echo $liczba1/$liczba2;
        break;
        }
        echo "<br><br>";
        //Zad8
        echo "Zad8 <br>";
        $x = random_int(-10,10);
        $y = random_int(-10,10);
        echo "x = $x, y= $y<br>";
        $odp = "Tekst";
        if($x > 0){
            if($y > 0){$odp = "w ćwiertce: I";}
            elseif($y < 0){$odp = "w ćwiertce: IV";}
            else{$odp = "na osi OX";}
        }
        elseif($x < 0){
            if($y > 0){$odp = "w ćwiertce: II";}
            elseif($y < 0){$odp = "w ćwiertce: III";}
            else{$odp = "na osi OX";}
        }
        elseif($x == 0 && $y!=0){$odp = "na osi OY";}
        else{$odp = "w punkcie 0";}
        echo "Punkt znajduje sie $odp<br><br>";
        //Zad9
        echo "Zad9 <br>";
        $a = random_int(1, 15);
        $b = random_int(1, 15);
        $c = random_int(1, 15);
        echo "a = $a, b = $b, c= $c<br>";
        $odp = "Tak";
        if($a+$b < $c){$odp = "Nie";}
        elseif($b+$c < $a){$odp = "Nie";}
        elseif($c+$a < $b){$odp = "Nie";}
        echo "$odp<br><br>";
        //Zad10
        echo "Zad10<br>";
        $nr = random_int(1, 12);
        switch($nr){
            case "1": echo "Styczeń"; break;
            case "2": echo "Luty"; break;
            case "3": echo "Marzec"; break;
            case "4": echo "Kwiecień"; break;
            case "5": echo "Maj"; break;
            case "6": echo "Czerwiec"; break;
            case "7": echo "Lipiec"; break;
            case "8": echo "Sierpień"; break;
            case "9": echo "Wrzesień"; break;
            case "10": echo "Październik"; break;
            case "11": echo "Listopad"; break;
            case "12": echo "Grudzień"; break;    
            }
        echo "<br><br>";
        //Zad11
        echo "Zad11<br>";
        $ocena = random_int(1,6);
        echo "Ocena: $ocena<br>";
        $wynik = "Promocja do następnej klasy";
        if($ocena == 1){$wynik = "Brak Promocji do następnej klasy";}
        elseif($ocena == 6){$wynik = "Promocja z oceną celującą";}
        echo "$wynik<br><br>";
        //Zad12
        echo "Zad12 <br>";
        switch($ocena){
            case "1": echo "Niedostateczny"; break;
            case "2": echo "Dopuszczający"; break;
            case "3": echo "Dostateczny"; break;
            case "4": echo "Dobry"; break;
            case "5": echo "Bardzo Dobry"; break;
            case "6": echo "Celujący"; break;
        }
        echo "<br><br>";
        //Zad13
        echo "Zad13 <br>";
        $zl = 5;
        $waluta = "dolar";
        $euro = 4.85;
        $funt = 5.37898;
        $dolar = 4.95;
        $cena = 1.1;
        switch($waluta){
            case "funt":  $cena = $zl * $funt ; break;
            case "euro":  $cena = $zl * $euro; break;
            case "dolar":  $cena = $zl * $dolar; break;
        }
        echo "$cena<br><br>";
        //Zad14
        echo "Zad14 <br>";
        $metr = 10;
        $odp = 1;
        $miara = "cm";
        switch($miara){
            case "mm": $odp = $metr * 1000; break;
            case "cm": $odp = $metr * 100 ; break;
            case "dm": $odp = $metr * 10; break;
            case "km": $odp = $metr /1000; break;
        }
        echo "$metr m to $odp $miara<br><br>";
        //Zad15
        echo "Zad15<br>";
        $x = random_int(10, 30);
        if($x > 20){echo "Liczba $x jest większa od 20";}
        else{echo "Liczba $x nie jest większa od 20";}
        echo "<br><br>";
        //Zad16
        echo "Zad16<br>";
        $z = random_int(1, 300);
        if($z > 99 && $z < 1000){echo "Liczba $z jest trzycyfrowa";}
        else {echo "Liczba $z nie jest trzycyfrowa";}
        echo "<br><br>";
        //Zad17
        echo "Zad17 <br>";
        $age = random_int(15, 40);
        echo "Twój wiek to $age<br>";
        $opcja = 1;
        if($age >= 18){
            $opcja = 2;
            if($age >=21){
                $opcja =3;
                if($opcja >=30){
                    $opcja = 4;
                    if($opcja >=35){
                        $opcja =5;
                    }
                }
            }
        }
        switch($opcja){
            case "1": echo "Jeszcze nie możesz głosować"; break;
            case "2": echo "Możesz tylko głosować"; break;
            case "3": echo "Możesz głosować i kandydować do Sejmu"; break;
            case "4": echo "Możesz głosować i kandydować do Sejmu i Senatu"; break;
            case "5": echo "Możesz głosować, kandydować do Sejmu i Senatu oraz
            na Prezydenta"; break;
        }
        echo "<br><br>";
        //Zad18
        echo "Zad18 <br>";
        $ile = random_int(0, 10);
        echo "$ile<br>";
        if($ile < 1 || $ile > 9){echo "Wartość poza zakresem";}
        else{
            for($i = 1; $i <= $ile; $i++){
                echo "+";
            }
        }
        echo "<br><br>";
        //Zad19
        echo "Zad19 <br>";
        $miesiac = random_int(0, 13);
        echo "miesiąc: $miesiac<br>";
        $kwartal = 1;
        if($miesiac >= 1 && $miesiac <= 3){$kwartal = 1;}
        elseif($miesiac >=4 && $miesiac <= 6){$kwartal = 2;}
        elseif($miesiac >=7 && $miesiac <=9){$kwartal = 3;}
        elseif($miesiac >=10 && $miesiac <=12){$kwartal = 4;}
        else{$kwartal = 5;}

        switch($kwartal){
            case "1": echo "Kwartał I"; break;
            case "2": echo "Kwartał II"; break;
            case "3": echo "Kwartał III"; break;
            case "4": echo "Kwartał IV"; break;
            case "5": echo "Błędny numer miesiąca"; break;
        }
        echo "<br><hr/>"

    ?>
</body>
</html>