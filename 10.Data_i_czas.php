<?php
header("Refresh: 5; 04.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data i czas</title>
</head>
<body>
<h1>Obsługa daty i czasu w PHP</h1>
 <?php
// 1️⃣ 🟥date_default_timezone_set()🟥 - Ustawienie strefy czasowej (bez tego PHP może pokazywać zły czas).
//Domyślnie serwer może mieć ustawiony czas uniwersalny (UTC). Aby PHP wiedziało, że jesteś w Polsce, warto na początku skryptu dodać tę linijkę:
// ✅ Dla Polski:
date_default_timezone_set("Europe/Warsaw");

// 2️⃣ 🟥date()🟥 – wyświetlanie daty i czasu
// To najpopularniejszy sposób na wyświetlenie aktualnej daty. Funkcja ta przyjmuje "wzór" (format), według którego ma ułożyć datę.

/*Najważniejsze symbole do zapamiętania:
🟩 Y – rok (cztery cyfry, np. 2025)
🟩 m – miesiąc (z zerem na początku, np. 05, 12)
🟩 d – dzień miesiąca (z zerem na początku, np. 01, 27)
🟩 H – godzina w formacie 24-godzinnymi 
🟩 i – minuty (z zerem na początku, od 00 do 59)
🟩 s – sekundy (z zerem na początku, od 00 do 59)
*/
echo date("d-m-Y, H:i:s"). "<br>";

// 3️⃣ Czym jest Timestamp?
// To liczba sekund, która upłynęła od 1 stycznia 1970 roku.

// 4️⃣Funkcja 🟥time()🟥 zwraca aktualny timestamp:
$teraz = time();
echo $teraz . "<br>";
echo date("Y * m * d - H:i:s", $teraz) . "<br>";



// Możesz też przekazać timestamp do funkcji date(), aby wyświetlić konkretną datę:


// 5️⃣ 🟥mktime()🟥 zwraca znacznik czasu podanej daty. Ma trochę "dziwną" kolejność argumentów (najpierw czas, potem data). Jej argumentami są kolejno:
/*
•	godzina,
•	minuta,
•	sekunda,
•	miesiąc,
•	dzień miesiąca,
•	rok.
❌ trzeba podać wszystkie liczby - jeśli pominiesz argumenty, PHP podstawi aktualne wartości
*/
$data = mktime(0, 0, 0, 3, 7, 2002);
echo date("d-m-Y H:i") . "<br>";

 


// 6️⃣ 🟥 strtotime()🟥 - zamienia tekst na znacznik czasu
// To "magiczna" funkcja, która potrafi zrozumieć ludzki język (po angielsku) i zamienić go na timestamp.
// Jest niezwykle przydatna!
$jutro = strtotime("tomorrow");
echo date("d-m-Y H:i:s", $jutro) . "<br>";
$zaTydzien = strtotime("+1 week");
echo date("d-m-Y H:i:s", $zaTydzien) . "<br>";
$futureDate = strtotime("2045-12-31");
echo date("d-m-Y", $futureDate) . "<br>";






// 7️⃣ 🟥getdate()🟥
// O ile date() służy głównie do wyświetlania daty, o tyle getdate() służy do jej analizowania. 
// Zamiast tekstu, zwraca ona tablicę asocjacyjną, w której każda informacja (godzina, dzień, miesiąc) jest osobnym elementem.
$dzisiaj = getdate();



/*W wyniku zobaczysz coś takiego:
[seconds] – sekundy (0-59)
[minutes] – minuty (0-59)
[hours] – godziny (0-23)
[mday] – dzień miesiąca (1-31)
[wday] – dzień tygodnia (0 dla niedzieli, 6 dla soboty)
[mon] – numer miesiąca (1-12)
[year] – rok (np. 2025)
[weekday] – pełna nazwa dnia tygodnia (np. Saturday)
[month] – pełna nazwa miesiąca po angielsku (np. December)
[0] - aktualny znacznik czasu (timestamp - liczba sekund od 1 stycznia 1970)
*/
$czas = getdate();
if($czas['wday'] == 0 || $czas['wday'] == 6) {
    echo "<p>Mamy WEEKEND!!!</p>";
} else {
    echo "<p>Niestety idziemy do szkoły</p>";
}
//tworzymy znacznik czasu swoich urodzin (strtotime)
$dataUr = strtotime("2009-01-25");
$infoUr = getdate($dataUr);
echo "Urodziłem się w dzień o nazwie: {$infoUr['weekday']}<br>";


?>
<div>
    <p>
        <?php
        echo date("Y - m - d ; H:i:s");
        ?>
    </p>
</div>
</body>
</html>