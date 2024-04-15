<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="POST">
        <div>
            <label for="email">email :</label>
            <input type="mail" id="email" name="email" size="30">
        </div>
        <div>
            <label for="name">nom :</label>
            <input type="text" id="name" name="name" size="30">
        </div>
        <div>
            <label for="firstname">prenom :</label>
            <input type="text" id="firstname" name="firstname" size="30">
        </div>
        <div>
            <label for="phone">telephone :</label>
            <input type="number" id="phone" name="phone" size="30">
        </div>
        <div>
            <label for="comment">laissez un message :</label>
            <textarea name="commment" id="comment" cols="30" rows="10"></textarea>
        </div>

        <button type="submit">validez</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (Preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/' , $_POST["email"])) {
            echo ("<p>mail conforme au exigence</p>");
        }else{
            echo ("<p>mail non conforme</p>");
        }

        if (Preg_match("/^[a-zA-ZÀ-ÿ\s'-]+$/" , $_POST["name"])) {
            echo ("<p>nom conforme au exigence</p>");
        }else{
            echo ("<p>nom non conforme</p>");
        }

        if (Preg_match("/^[a-zA-ZÀ-ÿ\s'-]+$/" , $_POST["firstname"])) {
            echo ("<p>prenom conforme au exigence</p>");
        }else{
            echo ("<p>prenom non conforme</p>");
        }

        if (Preg_match("/^\+(?:\d\s?){9,20}\d$/" , $_POST["phone"])) {
            echo ("<p>telephone conforme au exigence</p>");
        }else{
            echo ("<p>telephone non conforme</p>");
        }
        if (Preg_match("/^[\s\S]{0,200}$/" , $_POST["comment"])) {
            echo ("<p>texte conforme au exigence</p>");
        }else{
            echo ("<p>texte non conforme</p>");
        }
    }
    ?>

</body>

</html>