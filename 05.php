<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
<input type="number" name="input" required max="10000" min="1"> <br>
<button type="submit" name="submit">Generuj</button>
</form>
<h2>Liczby pierwsze:</h2>
<?php
// function dzielniki($i){
//             $count = 0;
//         for($j=1; $j<=$i; $j++){
//             if ($i % $j == 0){
//                 $count++;
//             }
//         }
//         return $count;
//     }


// if (isset($_POST['submit'])){
//     $max = intval($_POST['input']);
//     for ($i=1; $i<=$max; $i++){
//         echo "<li>" . $i ." ma ". dzielniki($i) . " dzielników</li>";
//     }
// };


// $maxDzielniki = 0;
// $liczba = 0;
// for ($i=1; $i<=1000; $i++){
//     $aktDzielniki = dzielniki($i);
//     if ($aktDzielniki > $maxDzielniki){
//         $maxDzielniki = $aktDzielniki;
//         $liczba = $i;
//     }
// }
// echo "<li>Najwięcej dzielników ma liczba " . $liczba . " (". $maxDzielniki .")</li>";

//Liczby pierwsze
function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
echo "<ul>";
if (isset($_POST['submit'])){
    $max = intval($_POST['input']);
    for ($i=1; $i<=$max; $i++){
        if (isPrime($i)){
            echo "<li>" . $i . "</li>";
        }
    }
}
echo "</ul>";

?>

<!-- <!-- // //     $code = 403; -->
<!-- //     $message = match($code) {
//         200, 201, 204 => "Sukces",
//         400, 401, 403 => "Błąd po stronie klienta",
//         500, 502, 503 => "Błąd po stronie serwera",
//         default => "Nieznany status"
//     };

//     echo $message . "<hr>";
//     $imiona = ["Jan", "Ewa", "Kunegunda", "Adam", "Janka"];
//     echo "<ul>";
//     foreach ($imiona as $imie) {
//         echo "<li>$imie</li>";
//     }
//     echo "</ul>";

//     $uczen = [
//         "imie" => "Jan",
//         "wiek" => 20,
//         "klasa" => "2PRO"
//     ];
//     echo "<ol>";
//     foreach ($uczen as $klucz => $wartosc) {
//         echo "<li>$klucz to: $wartosc</li>";
//     }
//     echo "</ol>";
//     $numbers = [1,2,3,4];
//     foreach ($numbers as $num){
//         if ($num % 2 === 0){
//             $num *= 2;
//         }
//     }


//     echo '<pre>'; print_r($numbers); echo "</pre>";

// echo "<table border='1'>";
// echo "<tr><th>Mnożnik * 7</th><th>Wynik</th></tr>";
// foreach (range(1, 1) as $num) {
//     echo "<tr><td>$num</td><td>" . ($num * 7) . "</td></tr>";
// }

// // echo sumAll(1, 2, 3, 5) . "<br>";


// $multiply = function($a, $b) {
//     return $a * $b;
// };

// echo $multiply(3, 4) . "<br>";

// function recArea(float $a, float $b) : float {
//     return 2*$a + 2*$b;
// }
// echo recArea(2.3, '4') . "<br>";

// $mnoznik = 10;
// $dziesieciuj = fn($a) => $a * $mnoznik;

// echo $dziesieciuj(5) . "<br>"; --> -->

</body>
</html>