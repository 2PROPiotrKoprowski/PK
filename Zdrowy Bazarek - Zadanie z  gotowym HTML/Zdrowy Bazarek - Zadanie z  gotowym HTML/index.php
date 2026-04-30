<?php
$conn = mysqli_connect("localhost", "root", "", "bazar");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zdrowy bazarek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Zdrowy bazarek</h1>
    </header>
    <nav>
        <?php
        $sql1 = "SELECT nazwa_pliku, nazwa FROM towary";
        $result1 = $conn->query($sql1);
        while ($row1 = $result1->fetch_assoc()) {
        echo '<img src="' . $row1['nazwa_pliku'] . '" alt="' . $row1['nazwa'] . '">';
    }
    ?>
    </nav>
    <main>
        <aside>
            <img src="market.png" alt="bazarek">
        </aside>
        <section>
            <p>Wybierz owoc lub warzywo i podaj jego wagę:</p>
            <form method="post">
                <select name="wybrany-towar" required>
                <?php
                $sql2 = "SELECT id, nazwa FROM towary";
                $result2 = $conn->query($sql2);
                ?>
                </select>
                <input type="number" name="waga" step="0.01" min="0.01" required>
                <button name="zamowBtn" type="submit">Zamów</button>
            </form>

        </section>
    </main>
    <footer>
        <p>Stronę opracował: 12345678</p>
    </footer>
</body>
</html>
