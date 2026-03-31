<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        <select name="kraj">
            <option value="">---Wybierz kraj---</option>
            <option value="pl">Polska</option>
            <option value="de">Niemcy</option>
            <option value="fr">Francja</option>
            <option value="es">Hiszpania</option>
        </select>
        <button name="wybierzBtn">Wybierz</button>
    </form>
    <?php
    if(isset($_POST['wybierzBtn'])){
        if($_POST['kraj'] === ""){
            echo "<p>Wybierz jeden kraj</p>";
        } else {
            $kraj = $_POST['kraj'];
            $kraje = [
                'pl' => 'Polska',
                'de' => 'Niemcy',
                'fr' => 'Francja',
                'es' => "Hiszpania",
            ];
            echo "<p>Wybrałeś:" . $kraje[$kraj] . "</p>";
        }
    }

    ?>
</body>
</html>