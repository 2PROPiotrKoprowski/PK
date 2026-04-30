<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(file_exists('note.txt')){
        echo "Plik jest OK<br>";
        $zawartosc = nl2br(file_get_contents('note.txt'));
        echo "1 odczyt pliku:<br> $zawartosc<br>";
    } else {
        echo "Upss, coś nie tak z plikiem.<br>";
    }
    $txt = "Nowa notatka";
    file_put_contents('new_note.txt', $txt);


    $plik = fopen("note.txt", "r");
    $zawartosc = fread($plik, filesize("note.txt"));
    echo "<hr>2 odczyt z pliku:<br> " . nl2br($zawartosc) . "<br>";
    fclose($plik);

    $plik = fopen("note.txt", "r");
    $zawartosc = "";
    while(!feof($plik)){
        $linia = fgets($plik);
        $zawartosc .= $linia;
    }
    echo "<hr>3 odczyt z pliku:<br> " . nl2br($zawartosc) . "<br>";
    fclose($plik);

    $plik = fopen("note.txt", "r");
    $zawartosc = "";
    while(!feof($plik)){
        $znak = fgetc($plik);
        $zawartosc .= $znak;
    }
    echo "<hr>4 odczyt z pliku:<br> " . nl2br($zawartosc) . "<br>";
    fclose($plik);
    echo"<hr>";

    $plik = fopen("newnote.txt", "a");
    fwrite($plik, "\nNowa notatka");
    fclose($plik);
    ?>
</body>
</html>