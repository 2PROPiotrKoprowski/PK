<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZGŁOSZENIA</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Zgłoszenia wydarzeń</h1>
    </header>
    <main>
        <section id="lewy">
            <h2>Personel</h2>
            <form method="post">
                <label><input type="radio" name="Personel" checked>Policjant</label>
                <label><input type="radio" name="Personel">Ratownik</label>
                <button>Pokaż</button>
                <!-- Skrypt 1 -->
            </form>
            <table>
                <tr><th>ID</th><th>Imię</th><th>Nazwisko</th></tr>
                <tr><td></td></tr>
            </table>
            <!-- Skrypt 1 -->
        </section>
        <section id="prawy">
            <h2>Nowe zgłoszenie</h2>
            <ol><li></li></ol>
            <!-- Skrypt 2 -->
            <form method="post">
                <label>Wybierz id osoby z listy
                    <input type="number">
                </label>
                <button>Dodaj zgłoszenie</button>
                <!-- Skrypt 3 -->
            </form>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: </p>
    </footer>
</body>
</html>