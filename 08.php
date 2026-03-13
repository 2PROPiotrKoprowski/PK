<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Uczniowie:</h1>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'school');
    if(!$conn){
        die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
    }
    echo "HURA! Połączenie z bazą danych udane<br>";
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        // echo "<pre>"; print_r($row); echo "</opre><hr>";
        echo "Imię: {$row['imie']} Nazwisko {$row['nazwisko']} <br>";
        }
    }
    else {
        echo "Brak danych<br>";
    }

?>
</body>
</html>