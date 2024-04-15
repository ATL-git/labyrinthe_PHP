<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // EXO1 :
    // function pyra($line)

    // {

    //     for ($i = 1; $i <= $line; $i++) {
    //         for ($j = 1; $j <= $i; $j++) {
    //             echo ($i);
    //         }
    //         echo ("<br>");
    //     }
    // }

    // pyra(8);

    //EXO2 :

    // function valeurAbsolue($nombre){
    //     if ($nombre <0) {
    //         return (-$nombre) ;
    //     }else{
    //         return ($nombre) ;
    //     }
    // }

    // function absolueTenaire($nombre)
    // {
    //     return ($nombre < 0 ? -$nombre : $nombre);  //en tenaire
    // }

    // echo absolueTenaire(-20);


    //EXO3:

    // function bigNumber($array)
    // {
    //     $number = $array[0];
    //     foreach ($array as $value) {
    //         if ($value > $number) {
    //             $number = $value;
    //         }

    //     }
    //     return $number;
    // }

    // $tableau = [20,30,50,25,16,98,3,11,45,42,9,54] ;

    // echo bigNumber($tableau);

    //EXO4 :

    // function moduloEntier($firstValeur, $valeurTwo) {
    //     // Trouver le quotient de la division entière
    //     $quotient = intdiv($firstValeur, $valeurTwo);

    //     // Calculer le produit du quotient et du diviseur
    //     $produit = $quotient * $valeurTwo;

    //     // Calculer le reste en soustrayant le produit du dividende
    //     $reste = $firstValeur - $produit;

    //     return $reste;
    // }
    // echo moduloEntier(17,5)

    //EXO5 :

    // function nbreCaractere($phrase, $caractere)
    // {
    //     $nbreLettre = 0;

    //     for ($i = 0; $i < strlen($phrase); $i++) {

    //         if ($phrase[$i] == $caractere) {
    //             $nbreLettre++;
    //         }
    //     }
    //     return $nbreLettre;
    // }
    // echo nbreCaractere("je m'appelle Aurelien maureau", "a")

    //EXO6

    //     function nbrPerfect($nbre) {

    //     for ( $i = 2; $i <= $nbre; $i++) {
    //        $result = 0;
    //         for ($j = 1; $j < $i; $j++) {
    //             if ($i % $j == 0) {
    //                 $result += $j;
    //             }
    //         }
    //         if ($result == $i) {
    //             return ("<p>$nbre est un nombre entier</p>");
    //         }else{
    //             return ("<p>$nbre n'est pas un nombre entier </p>");
    //         }
    //     }
    // }

    // echo nbrPerfect(850)


    ?>
</body>

</html>