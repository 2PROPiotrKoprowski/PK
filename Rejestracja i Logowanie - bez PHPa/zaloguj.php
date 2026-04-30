<?php
session_start();
$message = "";

if(isset($_POST['zalogujSieBtn'])){
    mysqli_report(MYSQLI_REPORT_ERROR);
$conn = mysqli_connect("localhost", "root", "", "portal");
$email = $_POST['email'];
$haslo = $_POST['haslo'];
$sql = "SELECT id, email, hashHasla FROM users WHERE email = '$email';";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($haslo, $row['hashHasla'])){
        $message = "<p class='success'>Zalogowano pomyślnie! Przenoszę cię do panelu użytkownika</p>";
        $_SESSION['email'] = $row['email'];
        header("Refresh: 2; url=dashboard.php");
    } else {
        $message = "<p class= 'error'>Błędne hasło!</p>";
    };
} else {
    $message ="<p class= 'error'>Nie ma użytkownika o takim emailu!</p>";
    $message .= "<a href= 'zarejestruj.php'>Zarejestruj się<a/>";
    };
mysqli_close($conn);
};

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            display: block;
            width: 500px;
            border: 1px solid #ccc;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
        }

        input,
        button {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
        }

        .success {
            text-align: center;
            color: green;
        }

        .error {
            text-align: center;
            color: red;
        }
    </style>
</head>

<body>
    <h1>Logowanie użytkownika</h1>
    
    <form method="post">
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Hasło: <input type="password" name="haslo" required></label><br>
        <button type="submit" name="zalogujSieBtn">Zaloguj się</button>
        <?php
        echo $message;
        ?>
    </form>
</body>

</html>