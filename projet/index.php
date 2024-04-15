<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>

<body>

    <h1>Labyrinthe PHP</h1>

    <?php
    session_start();
    $maze = [
        [
            [3, 0, 1, 1, 0, 0, 0, 1],
            [1, 0, 1, 0, 0, 1, 0, 1],
            [1, 0, 0, 0, 1, 1, 0, 1],
            [1, 0, 1, 0, 1, 0, 0, 1],
            [1, 0, 1, 0, 1, 0, 4, 1],
        ],

        [
            [3, 1, 0, 0, 1, 0, 0, 1],
            [0, 1, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 1, 0, 1, 0],
            [0, 1, 0, 0, 1, 1, 1, 0],
            [0, 1, 0, 0, 1, 0, 4, 0],
        ],

        [
            [3, 1, 1, 0, 0, 0, 0, 0],
            [0, 1, 1, 0, 1, 0, 1, 0],
            [0, 1, 1, 0, 1, 0, 1, 0],
            [0, 1, 0, 0, 1, 0, 1, 0],
            [0, 0, 0, 1, 1, 1, 4, 0],
        ]
    ];
    if (!isset($_SESSION['map'])) {
        $_SESSION['map'] = $maze[rand(0, count($maze) - 1)];
    }
    $maze = $_SESSION['map'];
    if (!isset($_SESSION['position'])) {
        $_SESSION['position'] = [0, 0];
    }



    if (!isset($_SESSION['position'])) {
        $_SESSION['position'] = [0, 0];
    }
    $pos = $_SESSION['position'];

    ?>

    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['reset'])) {
            session_destroy();
            header("refresh:0");
        }

        if (isset($_POST['direction'])) {
            $direction = $_POST['direction'];


            switch ($direction) {
                case 'up':
                    $maze[0][0] = 0;
                    if ($_SESSION['position'][0] - 1 >= 0 && $maze[$_SESSION['position'][0] - 1][$_SESSION['position'][1]] != 1) {
                        $_SESSION['position'] = [$_SESSION['position'][0] - 1, $_SESSION['position'][1]];
                        if ($maze[$_SESSION['position'][0]][$_SESSION['position'][1]] == 4) {
                            echo ("<p class='winText'>Bravo !!! Vous avez attraper la souris !!</p>");
                        }
                    }

                    $maze[$_SESSION['position'][0]][$_SESSION['position'][1]] = 3;
                    break;
                case 'down':
                    $maze[0][0] = 0;
                    if ($_SESSION['position'][0] + 1 <= count($maze) - 1 && $maze[$_SESSION['position'][0] + 1][$_SESSION['position'][1]] != 1) {
                        $_SESSION['position'] = [$_SESSION['position'][0] + 1, $_SESSION['position'][1]];
                        if ($maze[$_SESSION['position'][0]][$_SESSION['position'][1]] == 4) {
                            echo ("<p class='winText'>Bravo !!! Vous avez attraper la souris !!</p>");
                        }
                    }

                    $maze[$_SESSION['position'][0]][$_SESSION['position'][1]] = 3;
                    break;
                case 'left':
                    $maze[0][0] = 0;
                    if ($_SESSION['position'][1] - 1 >= 0 && $maze[$_SESSION['position'][0]][$_SESSION['position'][1] - 1] != 1) {
                        $_SESSION['position'] = [$_SESSION['position'][0], $_SESSION['position'][1] - 1];
                        if ($maze[$_SESSION['position'][0]][$_SESSION['position'][1]] == 4) {
                            echo ("<p class='winText'>Bravo !!! Vous avez attraper la souris !!</p>");
                        }
                    }
                    $maze[$_SESSION['position'][0]][$_SESSION['position'][1]] = 3;
                    break;
                case 'right':
                    $maze[0][0] = 0;
                    if ($_SESSION['position'][1] + 1 <= count($maze[$_SESSION['position'][0]]) - 1 && $maze[$_SESSION['position'][0]][$_SESSION['position'][1] + 1] != 1) {
                        $_SESSION['position'] = [$_SESSION['position'][0], $_SESSION['position'][1] + 1];
                        if ($maze[$_SESSION['position'][0]][$_SESSION['position'][1]] == 4) {
                            echo ("<p class='winText'>Bravo !!! Vous avez attraper la souris !!</p>");
                        }
                    }
                    $maze[$_SESSION['position'][0]][$_SESSION['position'][1]] = 3;
                    break;
            }
        }
    }
    foreach ($maze as $i => $line) {
        $catPos = $_SESSION['position'];
        foreach ($line as $j => $cell) {
            if (!(($i === $catPos[0] && $j === $catPos[1])
                || ($i === $catPos[0] + 1 && $j === $catPos[1])
                || ($i === $catPos[0] - 1 && $j === $catPos[1])
                || ($i === $catPos[0] && $j === $catPos[1] + 1)
                || ($i === $catPos[0] && $j === $catPos[1] - 1)
                || ($i === $catPos[0] + 1 && $j === $catPos[1] + 1)
                || ($i === $catPos[0] + 1 && $j === $catPos[1] - 1)
                || ($i === $catPos[0] - 1 && $j === $catPos[1] - 1)
                || ($i === $catPos[0] - 1 && $j === $catPos[1] + 1)
            )) {
                $maze[$i][$j] = 2;
            }
        }
    }

    ?>
    <table cellspacing="0" cellpadding="0" style="width: 60%; ">
        <?php
        foreach ($maze as $row) {
            echo ('<tr>');
            foreach ($row as $value) {
                echo ('<td style="width: 200px; text-align : center ; height: 100px;">');
                if ($value == 3) {
                    echo "<img src='./assets/image/blackcat.png' width='50px' height='50px' style='transform:scaleX(-1); ';";
                } else if ($value == 4) {
                    echo "<img src='./assets/image/mouse.png' width='50px' height='50px'";
                } else if ($value == 1) {
                    echo "<img src='./assets/image/mansor.png' width='50px' height='100%'";
                } else if ($value == 2) {
                    echo "<img src ='./assets/image/brouillard.jpg' width='100%' height='100%' ";
                } else {
                    echo $value;
                }
                echo ('</td>');
            }
            echo ('</tr>');
        }
        ?>
    </table>

    <div class="arrowDir">
        <form action="" method="POST" class="formArrowDir">
            <div class="leftDir">
                <input type="submit" value="left" name="direction">
            </div>
            <div class="upNdDown">
                <div class="upDir">
                    <input type="submit" value="up" name="direction">
                </div>
                <div class="downDir">
                    <input type="submit" value="down" name="direction">
                </div>
            </div>
            <div class="rightDir">
                <input type="submit" value="right" name="direction">
            </div>
            <div class="rst">
                <input type="submit" name="reset" value="reset">
            </div>
        </form>
    </div>


</body>

</html>