<?php
$conn = mysqli_connect("localhost", "root", "", "przepisy");
$id = 7;
if(isset($_GET['id'])){
    $id = $_GET['id'];
};
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog kulinarny</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <aside>
    <a href="przepisy.php?id=1">Sernik</a><br>
    <a href="przepisy.php?id=2">Sałatka</a><br>
    <a href="przepisy.php?id=3">Pankejki</a><br>
    <a href="przepisy.php?id=4">Nugetsy</a><br>
    <a href="przepisy.php?id=5">Łosoś</a><br>
    <a href="przepisy.php?id=6">Kociołek</a><br>
    <a href="przepisy.php?id=7">Jagnięcinad</a><br>
    <a href="przepisy.php?id=8">Hamburgery</a><br>
    <a href="przepisy.php?id=9">Eklerki</a><br>
    <a href="przepisy.php?id=10">Churros</a><br>
    <p>Autor: 8</p>
    </aside>
    <main>
    <h1>
        <?php
        $sql1 = "SELECT potrawy.idPotrawy, rodzaje.rodzaj FROM potrawy JOIN rodzaje ON potrawy.idRodzaje = rodzaje.idRodzaje WHERE potrawy.idPotrawy = $id;";
        $res1 = mysqli_query($conn, $sql1);
        echo(mysqli_fetch_assoc($res1)['rodzaj']);
        ?>
    </h1>
    <!-- Skrypt 2 -->
     <img src="separator.png" alt="przepis">
     <p>Alergeny Skrypt 3</p>
     <h2>Składniki</h2>
     <ul>
        <li>Lorem 1 kg</li>
        <li>Ipsum 2 szt.</li>
        <li>Dolor 200 g</li>
        <li>Sit amet (szczypta)</li>
     </ul>
     <p>Skrypt 4</p>
    </main>
    <section style="background-image= url('<?$src?>')">
    <h1>Blog Kulinarny</h1>
    </section>
    <?php
    mysqli_close($conn)
    ?>

</body>
</html>