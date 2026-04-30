<?php
session_start();
if(isset($_SESSION['email']) === false){
    header("Location: zaloguj.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel użytkownika</title>
    <style>
        body {
            text-align: center;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 70px;
        }
        </style>
</head>
<body>
    <h1>Witaj w panelu użytkownika</h1>
    <p>Zalogowany jako: <?php echo $_SESSION['email'] ?></p>
    <a href="wyloguj.php">Wyloguj się</a>
</body>
</html>