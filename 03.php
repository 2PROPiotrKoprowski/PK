<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP</h1>
    <?php
    $x = 12.3456789;
    $y = round($x, 3);
    echo $y . "<br>";

    echo number_format($x, 2, ",") . "<br>";
    echo pi() . "<br>";
    echo M_PI . "<br>";
    // deg2rad()

    $age = 16;
    $plec = "kobieta";
    if($age < 18 && $plec === "kobieta"){
        echo "Niedorosła kobieta<br>";
    } elseif ($age < 18 && $plec !== "kobieta"){
        echo "Niedorosły mężczyzna<br>";
    } elseif ($age >= 18 && $plec === "kobieta") {
        echo "Dorosła kobieta<br>";
    } else{
        echo "Dorosły mężczyzna<br>";
    }

    echo($age >= 18 && plec === "kobieta") ? "Dorosła kobieta" : "Inna osoba<br>";

    $dzien = 3;
    switch($dzien){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        echo "Do szkoły<br>";
        break;
        case 6:
        case 7:
        echo "Weekend<br>";
        break;
        default:
        echo "Coś źle z danymi<br>";               
    }
    $punkty = 88;
    switch (true){
        case ($punkty === 100):
            echo "Celujący<br>";
            break;
        case ($punkty >= 90):
            echo "Bardzo dobry<br>";
            break;
        case ($punkty >= 0):
            echo "Ocena do poprawy<br>";
            break;
    }
    ?>
</body>
</html>