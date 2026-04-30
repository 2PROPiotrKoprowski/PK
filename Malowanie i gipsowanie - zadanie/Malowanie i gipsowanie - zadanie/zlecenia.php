<?php
$conn = mysqli_connect("localhost", "root", "", "remonty");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remonty</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Malowanie i gipsowanie</h1>
    </header>
    <main>
        <nav>
        <a href="kontakt.html">Kontakt</a>
        <a href="https://remonty.pl" target="_blank">Partnerzy</a>
        </nav>
        <aside>
            <img src="tapeta_lewa.png" alt="usługi"><br>
            <img src="tapeta_prawa.png" alt="uslugi"><br>
            <img src="tapeta_lewa.png" alt="uslugi">
        </aside>
        <section id="lewy">
            <h2>Dla klientów</h2>
            <form method="post">
                <label>Ilu co najmniej pracowników potrzebujesz?<br> <input type="number" name="pracownicy"></label>
                <button>Szukaj firm</button>
                <!-- Skrypt 1 -->
                 <?php
                $sql1 = "SELECT wykonawcy.nazwa_firmy, wykonawcy.liczba_pracownikow FROM wykonawcy WHERE wykonawcy.liczba_pracownikow >=" . $_POST['pracownicy'] . ";";
                $res1 = mysqli_query($conn, $sql1);
                while($row = mysqli_fetch_assoc($res1)){
                    echo '<p>' . $row['nazwa_firmy'] . ', ' . $row['liczba_pracownikow'] . ' pracowników</p>';  
                }
                ?>

            </form>
        </section>
        <section id="środkowy">
            <h2>Dla wykonawców</h2>
            <form method="post">
                <select name="miasto">
                    <!-- skrypt 2 -->
                     <?php
                        $sql2 = "SELECT DISTINCT klienci.miasto FROM klienci ORDER BY klienci.miasto ASC;";
                        $res2 = mysqli_query($conn, $sql2);
                        while($row = mysqli_fetch_assoc($res2)){
                            echo '<option value = "'.$row['miasto'].'">' . $row['miasto'] . '</option>';
                        };
                     ?>
                </select><br>
                <label>malowanie <input type="radio" name="usluga" checked></label><br>
                <label>gipsowanie <input type="radio" name="usluga"></label><br>
                <button>Szukaj klientów</button>
            </form>
            <ul>
                <!-- skrypt 3 -->
                 <?php
                    $sql3 = 'SELECT klienci.imie, zlecenia.cena FROM klienci JOIN zlecenia ON klienci.id_klienta = zlecenia.id_klienta WHERE klienci.miasto LIKE '. post . ' AND zlecenia.rodzaj LIKE "malowanie";";
                    $res3 = 
                 ?>
            </ul>
        </section>
    </main>
    <footer>
        <p><strong>Stronę wykonał: 8</strong></p>
    </footer>
</body>
</html>