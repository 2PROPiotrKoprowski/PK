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
    echo "<p>To jest HTML generowany przez PHP</p>"
    ?>
    <p>Zwykły HTML</p>
    <?= "Hello 2PRO" ?>
    <?php $userName = "Marek" ?>
    <p>Witaj: <?= $userName ?></p>
    <p>Witaj: <?php echo $userName ?></p>
    <?php
    EchO "<br>zzz<br>";
    echo ("<p>1</p>");
    print ("Print<br>");
    echo "aaaaaa", " ", "bbbbbbbbb"
    $wiek = 17;
    echo "Mam $wiek lat<br>";
    echo "Mam $wiek lat<br>";
    echo 'Mam $wiek lat<br>';
    echo "xx<br>"
    $cena = 12.99
    echo "Produkt kosztuje {$cena}zł.<br>"
    echo "Produkt kosztuje " . $cena . "zł.<br>";
    echo "To jest cytat: \"Być albo nie być\".";

    ?>


</body>
</html>