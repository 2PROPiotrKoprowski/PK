<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $code = 403;
    $message = match($code) {
        200, 201, 204 => "Sukces",
        400, 401, 403 => "Błąd po stronie klienta",
        500, 502, 503 => "Błąd po stronie serwera",
        default => "Nieznany status"
    };

    echo $message . "<hr>";
    $imiona = ["Jan", "Ewa", "Kunegunda", "Adam", "Janka"];
    echo "<ul>";
    foreach ($imiona as $imie) {
        echo "<li>$imie</li>";
    }
    echo "</ul>";

    $uczen = [
        "imie" => "Jan",
        "wiek" => 20,
        "klasa" => "2PRO"
    ];
    echo "<ol>";
    foreach ($uczen as $klucz => $wartosc) {
        echo "<li>$klucz to: $wartosc</li>";
    }
    echo "</ol>";
    $numbers = [1,2,3,4];
    foreach ($numbers as $num){
        if ($num % 2 === 0){
            $num *= 2;
        }
    }


    echo '<pre>'; print_r($numbers); echo "</pre>";

echo "<table border='1'>";
echo "<tr><th>Mnożnik * 7</th><th>Wynik</th></tr>";
foreach (range(1, 100) as $num) {
    echo "<tr><td>$num</td><td>" . ($num * 7) . "</td></tr>";
}

?>
</body>
</html>