<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyszukiwarka miast</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section id="kontener">
        <header><img src="baner.jpg" alt="Polska"></header>
        <section id="blok-lewy-gora">
            <h4>Podaj początek nazwy miasta</h4>
            <form action="" method="post">
                <input type="text" name="szukaj">
                <button type="submit" name="szukaj-btn">Szukaj</button>
            </form>
        </section>
        <section id="blok-prawy">
            <h1>Wyniki wyszukiwania miast z uwzględnieniem filtra:</h1>
            <table>
                <tr><th>Miasto</th><th>Województwo</th></tr>
            </table>
             <?php
                $conn = mysqli_connect("localhost", "root", "", "wykaz");
        if(!$conn){
        die("connection failed" . mysqli_connect_error());

};

$sql = "SELECT miasta.nazwa, wojewodztwa.nazwa FROM miasta JOIN wojewodztwa ON miasta.id_wojewodztwa = wojewodztwa.id WHERE miasta.nazwa LIKE 'Lu%' ORDER BY miasta.nazwa ASC;";
$result = $conn->query($sql);

// if(isset($_GET['delete']))
// $conn->query("DELETE FROM wycieczki WHERE id=".$_GET['delete']);

while($row = $result->fetch_assoc())
    echo "<tr>
<td>{$row['miasta.nazwa']}</td>
<td>{$row['województwa.nazwa']}</td>
</tr>";
    ?>
        </section>
        <section id="blok-lewy-dol">
            <p>Egzamin INF.03</p>
            <p>Autor: 12345678</p>
        </section>
    </section>
</body>
</html>





