<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dodaj pacjenta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <h2>Dodaj nowego pacjenta</h2>

    <form action="nowypacjent.php" method="post">
        <p>Podaj imie: </p><br/>
        <input type="text" name="imie" placeholder="Podaj imie"><br/>
        <p>Podaj nazwisko: </p><br/>
        <input type="text" name="nazwisko" placeholder="Podaj nazwisko"><br/><br/>
        <input type="submit" value="Dodaj pacjenta" />
    </form>
</body>
</html>