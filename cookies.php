<?php
$czas = time() + 3600 * 24;
setcookie("user", "Januszek", $czas);
echo "Ustawiono ciasteczko";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['user'])){
        echo "Witaj ponownie" . $_COOKIE['user'] . "!" ;
    } else {
        echo "Witaj Gościu<br>";
    }
    ?>
</body>
</html>