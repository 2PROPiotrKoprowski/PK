<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="Imie">Imię <input type="text" name="Imie"></label> <br>
    <label for="Rok_ur">Rok_ur <input name="Rok_ur" type="date"></label> <br>
    <textarea name="kom" id="kom" placeholder="Wpisz wiadomość"></textarea>
    <button type="submit">Wyślij</button>
    </form>
    
    <?php
    if (isset($_POST['Imie'])) {
        $imie = $_POST['Imie'];
        $rok_ur = $_POST['Rok_ur'];
        $kom = $_POST['kom'];

        echo "Imię: " . $imie . "<br>";
        echo "Rok urodzenia: " . $rok_ur . "<br>";
        echo "Komentarz: " . $kom;
    }
    ?>
</body>
</html>