<?php 
session_start();
require_once('pacjenci.php');

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bmi calculaotr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Bmi kalkulator</h1>
    <form method="post" action="dodajwizyte.php">
    <select name="pacjenci">
<?php
        
        $pacjenci = pobierzPacjentow();    
        foreach ($pacjenci as $pacjent) { 
          echo"<option value=\"".$pacjent->getId()."\">".$pacjent->getImie()." ".$pacjent->getNazwisko()."</option>";
        }
?>
        </select>
        <a href="dodajpacjenta.php">Dodaj Pacjenta</a>
        <p>Podaj wagę w kg</p>
        <input type="number" name="waga" />
        <br/>
        <p>Podaj wzrost w cm</p>
        <input type="number" name="wzrost" />
        <br/>
        <button type="submit">Sprawdź bmi</button>
        <br/>
    </form>
</body>
</html>
