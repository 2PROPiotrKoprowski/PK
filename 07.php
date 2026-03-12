<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header, footer{
            background-color: beige;
            text-align: center;
        }
        .flex-wrapper{
            display: flex;
            min-height: 500px;
        }
        nav{
            background-color: aquamarine;
            width: 30%;
        }
        main{
            width: 70%;
            background-color: antiquewhite;
        }
        h1{
            margin: auto;
        }
    </style>
</head>
<body>
    <header><h1>Firma XYZ</h1></header>
    <div class="flex-wrapper">
        <nav>
            <ul>
                <li><a href="07.php?strona=glowna">Główna</a></li>
                <li><a href="07.php?strona=o-nas">O nas</a></li>
                <li><a href="07.php?strona=Oferta">Oferta</a></li>
                <li><a href="07.php?strona=Kontakty">Kontakty</a></li>
            </ul>
        </nav>
        <main>
            <?php
            $wybrana = $_GET['strona'] ?? "glowna";
            switch ($wybrana){
                case "glowna":
                    echo "<h2>Witaj na stronie głównej</h2>";
                    echo "<p>To jest treść 1</p>";
                    break;
                case "o-nas":
                    echo "<h2>Witaj na podstronie O NAS</h2>";
                    echo "<p>To jest treść 2</p>";
                    break;
                case "Oferta":
                    echo "<h2>Witaj na podstronie OFERTA</h2>";
                    echo "<p>To jest treść 3</p>";
                    break;
                case "Kontakty":
                    echo "<h2>Witaj na podstronie KONTAKTY</h2>";
                    echo "<p>To jest treść 4</p>";
                    break;
                default:
                echo "<h2>Błąd 404</h2>";
                echo "<p>Sorry, taka strona nie istnieje</p>";
                break;

            }
            ?>
        </main>
    </div>
    <footer>
        <?php
        include "footer.php";
        ?>
    </footer>
</body>
</html>