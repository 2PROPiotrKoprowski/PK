<!DOCTYPE html>
<html>
<head>
    <title>Teoria PHP</title>
</head>
<body>
<?php
   // 🟩 URUCHAMIANIE PHP
   // PHP działa po stronie serwera.
   // To oznacza, że kod PHP wykonuje się na serwerze (np. Apache w XAMPP), a do przeglądarki trafia tylko WYNIK działania (najczęściej HTML).
   // Użytkownik NIGDY nie widzi kodu PHP - widzi tylko efekt.

   // Aby uruchomić PHP:
   // 1. Zainstaluj XAMPP.
   // 2. Włącz Apache.
   // 3. Umieść plik w folderze C:\xampp\htdocs.
   // 4. Uruchom w przeglądarce: http://localhost/nazwa_pliku.php

   // WAŻNE:
   // Plik musi mieć rozszerzenie .php
   // Jeśli zapiszesz go jako .html – PHP się nie wykona!


   // 🟩 TAGI PHP
   // Każdy kod PHP musi znajdować się między tagami:
   // <?php ... ?%lt;
 
   // Poza tagami → traktowane jako HTML
   // Wewnątrz tagów → interpretowane jako PHP

   echo "<p>To jest HTML generowany przez PHP.</p>";
   ?>

   <!-- W PHP oprócz klasycznej konstrukcji: -->
   <?php echo "Hi!<br>" ?> 
   <!-- możesz użyć skróconej formy:-->
   <?= "Hi!<br>" ?>
   <!-- To po prostu krótszy zapis polecenia echo, który działa identycznie. -->
   <!-- Służy on do szybkiego wypisywania (echo) zmiennych w szablonach HTML: -->
   <?php $userName = "Jan"; ?>
   <p>Witaj, <?= $userName ?></p>

   <?php
   // Zamykanie tagu <?php
   // W czystych plikach PHP (bez HTML) nie zaleca się zamykania tego tagu, aby uniknąć przypadkowych białych znaków.
   // 🟩 SKŁADNIA PODSTAWOWA
   // ✔️ Każda instrukcja musi kończyć się średnikiem ;
   // ✔️ PHP nie jest wrażliwe na wielkość liter w słowach kluczowych: echo, ECHO, Echo - zadziała tak samo
   // ✔️ Zmienne są WRAŻLIWE na wielkość liter!
   //    $wiek ≠ $Wiek

   echo "Pierwsza instrukcja PHP<br>";
   Echo "Druga instrukcja<br>";
   ECHO "<hr>";


   // 🟩 ECHO I PRINT
   // echo - wyświetla dane
   // print - działa podobnie, ale zwraca wartość 1
   // ✔️ Obie konstrukcje NIE są zwykłymi funkcjami, tylko konstrukcjami języka (language constructs).
   // ✔️ Można ich używać:
   //    - z nawiasami ()
   //    - bez nawiasów
   echo "To jest echo bez nawiasów<br>";
   echo("To jest echo z nawiasami<br>");

   print "To jest print bez nawiasów<br>";
   print("To jest print z nawiasami<br>");

   // WAŻNA RÓŻNICA:
   // ✔️ echo BEZ nawiasów może przyjmować kilka argumentów, oddzielonych przecinkami.
   // ✔️ print może przyjąć tylko JEDEN argument.
   $imie = "Anna";
   $wiek = 25;
   // echo – wiele argumentów (tylko bez nawiasów!)
   echo "Imię: ", $imie, ", wiek: ", $wiek, "<br>";
   // To NIE zadziała: echo("Imię: ", $imie);   ❌ Błąd!


   // 🟩 KOMENTARZE
   // komentarz jednolinijkowy
   # komentarz jednolinijkowy
   /* komentarz 
   blokowy */


   // 🟩 CUDZYSŁOWY - RÓŻNICE
   // " " - interpretują zmienne
   // ' ' - traktują tekst dosłownie
   // W cudzysłowach podwójnych (") PHP szuka zmiennych i je zamienia na ich wartość. W cudzysłowach pojedynczych (') PHP traktuje wszystko dosłownie. Kiedyś twierdzono, że cudzysłowy pojedyncze są szybsze, ponieważ PHP nie musi przeszukiwać tekstu w poszukiwaniu specjalnych elementów. Różnica wydajności jest dziś praktycznie niezauważalna.
   $imie = "Anna";
   echo "Witaj $imie<br>";   // Anna
   echo 'Witaj $imie<hr>';   // $imie


   // 🟩 KONKATENACJA (ŁĄCZENIE TEKSTU)
   // Do łączenia używamy kropki .
   $wiek = 25;
   echo 'Imię: ' . $imie . ', wiek: ' . $wiek . '<hr>';


   // 🟩 Użycie {} przy wyświetlaniu zmiennych
   // Czasami zmienna znajduje się bezpośrednio obok tekstu i PHP może nie wiedzieć, gdzie kończy się nazwa zmiennej.
   $cena = 2499.99;
   echo "Cena produktu to {$cena}zł.<hr>";
   // Gdybyśmy napisali:
   // echo "Cena produktu to $cenazł";
   // PHP szukałoby zmiennej $cenazł (która nie istnieje) i wystąpiłby błąd.
   // {} jasno wskazuje, gdzie kończy się nazwa zmiennej.

   
   // 🟩 SEKWENCJE UCIECZKI
   //    Działają tylko w " "
   //    \n - nowa linia
   //    \t - tabulator
   //    \" - cudzysłów
   echo "I\'m Robot<br>";
   echo "To jest \"cytat\"<hr>";





?>

</body>
</html>