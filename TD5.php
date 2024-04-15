<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="">
        <label for="hexadecimal">entrez la valeur :</label>
        <input type="text" maxlength="6" placeholder="entrez un hexadecimal de 6 chiffre" size="30" id="hexadecimal" name="hexadecimal">
        <button type="submit">valider</button>

    </form>



    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hexadecimal = $_POST["hexadecimal"];

        $r = substr($hexadecimal, 0, 2);
        $hexr = hexdec($r);
        $b = substr($hexadecimal, 2, 2);
        $hexb = hexdec($b);
        $v = substr($hexadecimal, 4, 2);
        $hexv = hexdec($v);

        echo $color = "rgb($hexr, $hexb, $hexv);";

        echo "<style> body { background-color: $color } </style>";
    
     }

    ?>

  



</body>

</html>