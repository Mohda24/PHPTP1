<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohda exercices</title>
</head>
<body>
    <?php
    // Exercice 1
    $DC1=10;
    $DC2=15;
    $DS=18;
    $moy=($DC1+$DC2+$DS)/3;
    echo "<h1>Le moyenne est : $moy</h1>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // exercice 2
    $age = 10;
    if(gettype($age)=='integer'){
        echo "<h2>Hello mister ur age is :$age</h2>";
    }
    else{
        echo "<h1>Please entre Correct Age </h1>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // Exercice3
    $a=1;
    $b=1;
    $c=1;
    if($a==$b && $a==$c){
        echo '<h1>les trois Variable egale</h1>';
    }
    elseif ($a==$b || $a==$c || $b==$c) {
        echo '<h1>seulement deux sont identiques,</h1>';
    }
    else{
        echo '<h1>Les trois variables sont différentes.</h1>';
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // Exercice 4
    $EnfentAge=8;
    if(6<=$EnfentAge && $EnfentAge<=7){
        echo "<h1>Your categorie is Poussin</h1>";
    }
    elseif (8<=$EnfentAge && $EnfentAge<=9) {
        echo "<h1>Your categorie is Pupille</h1>";
    }
    elseif (10<=$EnfentAge && $EnfentAge<=11) {
        echo "<h1>Your categorie is Minime</h1>";
    }
    elseif (12<=$EnfentAge && $EnfentAge<=17) {
        echo "<h1>Your categorie is Cadet</h1>";
    }
    else {
        echo "<h1>Entrer correct age !!!!</h1>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // Exercice 5
    $meuble=1;
    switch($meuble){
        case 1:
            echo "<h2>Contient divers outils pour dessiner : du papier, des crayons, etc.</h2>";
            break;
        case 2:
            echo "<h2>Contient du matériel informatique : des câbles, des composants, etc.</h2>";
            break;
        case 3:
            echo "<h2>Ah ? Ce tiroir est fermé à clé ! Dommage !</h2>";
            break;
        case 4:
            echo "<h2>Contient des vêtements : des chemises, des pantalons, etc.</h2>";
            break;
        default:
            echo "<h2>Entrer correct choix (1 a 4)!!!!!!</h2>";
    };
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // Exercice 6
    for($nom=20;$nom>=0;$nom-=2){
        echo "<h3>$nom</h3><br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // Exercice 7 
    for ($prem = 2; $prem <= 100; $prem++) {
        $is_prime = true;
        for ($pr = 2; $pr < $prem; $pr++) {
            if ($prem % $pr == 0) {
                $is_prime = false;
                break;
            }
        }
        if ($is_prime) {
            echo "$prem ";
        }
    };
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // Exercice 8
    for($aa=1;$aa<=10;$aa+=1){
        for($bb=1;$bb<=$aa;$bb+=1){
            echo "1";
        }
        echo"<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // Exercice 9;
    function increment($x){
        return $x+=1;
    }
    // Exercice 10
    function getSurface($a,$b){
        return ($a*$b)/2;
    }

    




    

    

    ?>    
</body>
</html>