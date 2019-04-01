<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Podsumowanie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
<?php
    $waga = $_POST["waga"];
    $wzrost = $_POST["wzrost"]/100;
    $bmi = ($waga)/($wzrost*$wzrost);
    echo "<h1>Twoje BMI to:</h1><br/><h3>";
    echo(round($bmi,2));
    echo "</h3>";
?>
</body>
</html>