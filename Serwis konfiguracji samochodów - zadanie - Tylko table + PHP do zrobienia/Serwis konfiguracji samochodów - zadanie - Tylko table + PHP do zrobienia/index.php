<?php
$conn = mysqli_connect("localhost", "root", "", "samochody");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfigurator samochodów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header><h1>Serwis konfiguracji samochodów</h1></header>
    <nav>
        <h2>Samochody</h2>
        <h2>Konfigurator</h2>
        <h2>Kontakt</h2>
    </nav>
    <main>
        <section id="left">
            <table>
                <!-- Skrypt 1 -->
                 <?php
                 $sql = 'SELECT pojazdy.marka, pojazdy.model, pojazdy.cena, kolory.nazwa, kolory.doplata FROM pojazdy JOIN kolory ON pojazdy.kolor = kolory.id WHERE model LIKE "alfa";';
                 $res = mysqli_query($conn, $sql);
                 echo "<tr>";
                 while($row = mysqli_fetch_array($res)){
                    $cena = $row['cena'];
                    $doplata = $row['doplata'];
                    $suma = $cena + $doplata;
                      echo "<td> $row[0] </td>";
                      echo "<td> $row[1] </td>";
                      echo "<td> $row[3]</td>";
                      echo "<td>$suma</td>";
                      echo "</tr>";
                 }
                 ?>

            </table>
        </section>
        <section id="middle">
                <!-- Tabela do wstawienia + Skrypt 2 -->
                 <table>
                    <tr><th>Konfiguracja</th><th>Cena</th></tr>
                    <tr><td colspan="2"><img src="a1.jpg" alt=""></td></tr>
                     <?php
                $sql2 = 'SELECT pojazdy.marka, pojazdy.model, pojazdy.cena FROM pojazdy ORDER BY RAND() LIMIT 2;';
                $res2 = mysqli_query($conn, $sql2);
                $row1 = mysqli_fetch_array($res2);
                $row2 = mysqli_fetch_array($res2);
                echo"<tr><td>Marka</td><td>$row1[0]</td></tr>";
                echo"<tr><td>Model</td></tr>";
                ?> 
                 </table>                
        </section>
        <section id="right">
            <h3>111 222 444</h3>
            <img src="a3.png" alt="Samochód">
        </section>
    </main>
    <footer><p>Stronę wykonał: 12345678</p></footer>
    
</body>
</html>
<?php
mysqli_close($conn)
?>
