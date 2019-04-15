<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bmi Pacjenta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
<?php
    $waga = $_SESSION["waga"];
    $wzrost = $_SESSION["wzrost"];
    $bmi = $_SESSION["bmi"];
    echo "<h1>Twoje BMI to:</h1><br/><h3>";
    echo(round($bmi,2));
    echo "</h3>";
?>
<br/><br/>
    <a href="podsumowanie.php">Podsumowanie wizyt</a>
</body>
</html>
