<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post"> <br> <br>
        Nick:<input type="text" name = "imie"> <br> <br>
        Telefon:<input type="text" name = "telefon"><br> <br>
        Płeć:<input type="radio" name = "plec">Mężczyzna
        <input type="radio" name = "plec">Kobieta <br>
        Zainteresowania:<input type="checkbox" name ="zainteresowania">Sport
        <input type="checkbox">Muzyka
        <input type="checkbox">Jedzenie <br>
        <button name = "wybierzBtn">Prześlij</button>
    </form>

    <?php
    if(isset($_POST['wybierzBtn'])){
        $nick = $_POST['imie'];
        $telefon = $_POST['telefon'];
        $plec = $_POST['plec'];
        $zainteresowania = $_POST['zainteresowania'];
        echo "Twój nick to: " . $nick . "<br>";
        echo "Twój telefon to: " . $telefon . "<br>";
        echo "Twój telefon to: " . $plec . "<br>";
        echo "Twój telefon to: " . $zainteresowania . "<br>";
    }

    ?>
</body>
</html>