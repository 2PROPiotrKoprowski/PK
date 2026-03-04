<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mat</title>
</head>
<body>
    <h1>Metody mat</h1>
    <form action="" method="post">
        <label>Podaj x: <input type="number" name="num1"></label> <br> <br>
        <label>Podaj y: <input type="number" name="num2"></label> <br>
        <button type="submit" name="obliczBtn">OBLICZ</button>
    </form>
    <div class="wyniki">
        <?php
        if(isset($_POST['obliczBtn'])) {
            echo "<pre>";
            print_r($_POST); 
            echo"</pre>";
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $sum = $num1 + $num2;
            echo "<p>$num1 + $num2 = $sum</p>";
            echo"<p>|{$num1}| = " . abs($num1) . "</p>";
            echo"<p>$num1 ^ $num2 = " . pow($num1, $num2) . "</p>";
            echo"<p>$num1 ^ $num2 = " .  $num1 ** $num2 . "</p>";
            fggfhhgfgyfvuywfwq7f1377YF
            $max = max($num1, $num2);
            $min = min($num1, $num2);
            echo "<p>Wartość max: $max</p>";
            echo "<p>Wartość min: $min</p>";
            echo rand() . "<br>";
            echo rand(1,5) . "<br>";
            echo mt_rand(1, 100) . "<br>";
            echo random_int(1, 100) . "<br>";
            echo round($num1) . "<br>";
            echo ceil($num1) . "<br>";
            echo floor($num1) . "<br>";
            $num1 = intval($num1);
            $num2 = intval($num2);
            echo intdiv($num1, $num2) . "<br>";
            echo fmod(7.5, 3) . "<br>";
            echo hypot(3, 4) . "<br>";

            $x = 2626267235;
            echo $x


        }
        
        
        ?>
    </div>

</body>
</html>