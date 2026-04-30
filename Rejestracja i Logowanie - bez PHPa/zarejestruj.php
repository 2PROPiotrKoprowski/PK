<?php
$conn = mysqli_connect("localhost", "root", "", "portal");
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja użytkownika</title>
    <style>
        * {
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            width: 500px;
            border: 1px solid #ccc;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
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

        a {
            display: block;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Rejestracja użytkownika</h1>
    <form method="post">
        <label>Email: <input type="email" name="email" required value="<?=$_POST['email'] ?? '' ?>"></label>
        <label>Hasło: <input type="password" name="haslo1" required></label>
        <label>Powtórz hasło: <input type="password" name="haslo2" required></label>
        <button type="submit" name="zarejestrujSieBtn">Zarejestruj się</button>
        <?php
        if(isset($_POST['zarejestrujSieBtn'])){
            $email = $_POST['email'];
            $password1 = $_POST['haslo1'];
            $password2 = $_POST['haslo2'];

            //czy hasła nie są takie same
            if($password1 !== $password2){
                die("<p class='error'>Błąd hasła: Nie są takie same.</p>");
            }
            //sprawdzamy czy email jest zarejestrowany
            $sql = "SELECT id FROM users WHERE email = '$email';";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                echo "<a href='zaloguj.php?email=$email'>Przejdź do logowania</a>";
                die("<p class='error'>Błąd: Email jest już zarejestrowany</p>");
            }
            $hashHasla = password_hash($password1, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (email, hashHasla) VALUES ('$email', '$hashHasla');";
            if(mysqli_query($conn, $sql)){
                echo "<p class='success'>Konto założone pomyślnie!</p>";
                echo "<a href='zaloguj.php?email=$email'>Przejdź do logowania</a>";
            } else{
                echo "<p class='error'>Nie udało się założyć konta</p>";
            }
        }
        ?>
    </form>
</body>
</html>
<?php
mysqli_close($conn);
?>