<?php
$conn = mysqli_connect('localhost', 'root', '', 'szkolimy') or die("Błąd połączenia");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szkolenia i kursy</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>SZKOLENIA</h1>
    </header>
    <main>
        <section id="sekcja-lewa">
            <table>
                <tr><th>Kurs</th><th>Nazwa</th><th>Cena</th></tr>
                <!-- Skrypt1 -->
                 <?php
                 $sql1 = "SELECT kod, nazwa, cena FROM kursy ORDER BY cena ASC;";
                 $result = mysqli_query($conn, $sql1);
                 while($row = mysqli_fetch_assoc($result)){
                    $nazwaPliku = $row['kod'] . ".jpg";
                    echo "<tr>";
                    echo "<td><img src = '$nazwaPliku' alt='kurs'></td>";
                    echo "<td>{$row['nazwa']}</td>";
                    echo "<td>{$row['cena']}</td>";
                    echo "</tr>";
                 }
                 ?>
            </table>
        </section>
        <section id="sekcja-prawa">
            <h2>Zapisy na kursy</h2>
            <form action="index.php" method="post">
                <label for="imie">Imię</label> <br>
                <input type="text" id="imie" name="imie"><br>
                <label for="nazwisko">Nazwisko</label><br>
                <input type="text" id="nazwisko" name="nazwisko"><br>
                <label for="wiek">Wiek</label><br>
                <input type="number" id="wiek" name="wiek"><br>
                <label for="rodzaj-kursu">Rodzaj kursu</label><br>
                <select name="rodzaj-kursu" id="rodzaj-kursu">
                <!-- Skrypt2 -->
                 <?php 
                 $sql2 = "SELECT nazwa FROM kursy;";
                 $result = mysqli_query($conn, $sql2);
                 while ($row = mysqli_fetch_assoc($result)){
                    echo "<option>{$row['nazwa']}</option>";
                 }
                 ?>
                </select><br>
                <button name="dodajDaneBtn">Dodaj dane</button>
            </form>
            <!-- Efekt skryptu 3 -->
             <?php 
             if(isset($_POST['dodajDaneBtn'])){
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $wiek = $_POST['wiek'];
                if($imie !== "" && $nazwisko !== "" && $wiek !== ""){
                    $sql3 = "INSERT INTO uczestnicy VALUES (null, '$imie', '$nazwisko', '$wiek');";
                    if(mysqli_query($conn, $sql3)){
                        echo "<p>Dane uczestnika $imie $nazwisko zostały dodane</p>";
                    }
                }else{
                    echo "<p>Wprowadź wszystkie dane</p>";
                }
             }
             ?>
        </section>
    </main>
    <footer><p>Stronę wykonał: 7</p></footer>
</body>
</html>
<?php 
mysqli_close($conn)
?>