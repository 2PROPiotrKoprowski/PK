<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login:</h1>
    <p>
        <?php
        echo $_GET['login'] ?? "";
        ?>
    </p>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="text" name="login">
        <button type="submit" name="pokazBtn">POKAŻ</button>
    </form>
</body>
</html>