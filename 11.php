<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name = "imie">
        <button name = "pokazBtn">Pokaz</button>
    </form>
    <p>
        <?php
        if(isset($_POST['pokazBtn'])){
            $imie = htmlspecialchars($_POST['imie']);
            echo "$imie<br>";   
        }
        ?>
    </p>
</body>
</html>