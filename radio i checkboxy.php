<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            display: block;
            accent-color: red;
        }
        input[type='checkbox']{
            transform: scale(1.3);
        }
    </style>
</head>
<body>
    <form action="" method = "post">
        <h1>Wybierz ulubiony kolor:</h1>
        <label><input type="radio" name ="kolor" value ="red">Czerwony</label>
        <label><input type="radio" name = "kolor" value ="blue">Niebieski</label>
        <label><input type="radio" name = "kolor" value ="green">Zielony</label>
        <br>
        <button name = "akceptujBtn">Akceptuj</button>
    </form>
    <p>
        <?php
        if(isset($_POST['akceptujBtn'])){
            // print_r($_POST);
            if(isset($_POST['kolor'])){
                echo "Wybrałeś kolor: {$_POST['kolor']}";
            }else{
                echo "Zaznacz jeden kolor";
        }
    }
        ?>
    </p>
    <hr>
    <form action="" method = "post">
        <label><input type="checkbox" name = "opcje[]" value = "html">Hyper Text Markup Language</label>
        <label><input type="checkbox" name = "opcje[]" value = "js">Kaskadowe arkusze stylów</label>
        <label><input type="checkbox" name = "opcje[]" value = "php">Hyper Text Preprocessor</label>
        <input type="submit" name = "wybierzBtn" value = "Wybierz">
</form>
<p>
    <?php
    if(isset($_POST['wybierzBtn'])){
        if(isset($_POST['opcje'])){
            echo "Wybrane opcje to: " . implode(", ", $_POST['opcje']) . ".";
        }else{
            echo "Nie wybrano żadnej opcji.";
        }
    }
    ?>
</p>
</body>
</html>