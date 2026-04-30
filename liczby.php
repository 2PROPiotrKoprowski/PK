<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$liczby = [];
for ($i = 0; $i < 50; $i++) {
    $liczby[] = mt_rand(1, 100);
}
echo "Wylosowane liczby: <br>";
$tekst = implode("\n", $liczby);

    file_put_contents('liczby1.txt', $tekst);
    
    // $plik = fopen("liczby1.txt", "w");
    // $zawartosc = fread($plik, filesize("liczby1.txt"));
    // echo "<hr>Odczyt z pliku:<br> " . $zawartosc . "<br>";
    // fclose($plik);

    $zawartosc = fread($plik, filesize("liczby1.txt"));
    ?>
    
</body>
</html>