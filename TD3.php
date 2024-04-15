<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$tableau = ['infos' => ['nom' => 'Pesto', 'prenom' => 'Julia', 'age' => 30],
'films' => ['action' => ['Piège de cristal', 'Mad Max', 'Terminator', 'Matrix'],
'comédie' => ['Brice de Nice', 'Les Visiteurs', 'Le Dîner de cons', 'Neuilly sa mère !']]];

// premiere facon :

foreach ($tableau['infos'] as $key => $value) {
    echo("<p>$key : $value</p>");

    
}
foreach ($tableau['films'] as $key => $value) {
    foreach ($value as  $film) {
       echo("<p> $key : $film");
    }
}


// ou deuxieme facon : 

foreach ($tableau as $key => $value) {


    if ($key == 'films') {
        foreach ($tableau['films'] as $key => $value) {
            foreach ($value as  $film) {
                echo ("<p> $key : $film");
            }
        }
    } else {
       foreach ($value as $key => $value) {
        echo("<p>$key:$value<p/>");
       }
}
}





?>
    
</body>
</html>