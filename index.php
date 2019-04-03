<?php 
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
    <form method="post" action="order.php">
    <select>
<?php
        /*$pacjenci = pobierzPacjentow();
        foreach($pacjenci as $pacjent){?>
          <option value="<?php echo $pacjent->getId(); ?>">
          <?php echo $pacjent->getImieNazwisko(); ?>
          </option> <?php
        }  */
        $pacjenci = pobierzPacjentow();    
        foreach ($pacjenci as $pacjent) { //Nie udaje mi się wyświetlić więcej niż 1 pacjenta w select
            echo"<option value=\"".$pacjent->getId()."\">".$pacjent->getImie()." ".$pacjent->getNazwisko()."</option>";
        }
?>
        </select>
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