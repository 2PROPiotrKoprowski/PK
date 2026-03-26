<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCENY</title>
    <style>
        table{
            border: collapse collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>J_polski</th>
            <th>Matematyka</th>
            <th>Fizyka</th>
            <th>J_angielski</th>
            <th>Biologia</th>
            <th>Usuń</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "oceny");
        $sql = "SELECT * FROM klasa2pro";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo "
            <tr>
                <td>{$row['imie']}</td>
                <td>{$row['nazwisko']}</td>
                <td>{$row['j_polski']}</td>
                <td>{$row['matematyka']}</td>
                <td>{$row['fizyka']}</td>
                <td>{$row['j_angielski']}</td>
                <td>{$row['biologia']}</td>
                <td><a href = '?delete={$row['id']}'>usun</a></td>
            </tr>
            ";
        };
        if(isset($_GET['delete']))
            $conn->query("DELETE FROM 2pro WHERE id=".$_GET['delete']);
        

        ?>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="pl"> 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<table border = '1'>
<tr><th>Nazwa</th><th>Cena</th><th>Stan</th><th>Akcje</th></tr>
<?php

$conn = mysqli_connect("localhost", "root", "", "sklep");

if(!$conn){

    die("connection failed" . mysqli_connect_error());

}

$sql = "SELECT * FROM produkty";

$result = $conn->query($sql);

if(isset($_GET['delete']))

$conn->query("DELETE FROM produkty WHERE id_produktu=".$_GET['delete']);

while($row = $result->fetch_assoc())

    echo "<tr>
<td>{$row['nazwa']}</td>
<td>{$row['cena']}</td>
<td>{$row['stan_magazynowy']}</td>
<td><a href='?delete={$row['id_produktu']}'>Usuń</a></td>
</tr>";

?>
</table>
</body>
</html>
 