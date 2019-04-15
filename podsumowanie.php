<?php
require_once('connect.php');
?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Podsumowanie</title>
</head>
<body>
<h2>Podsumowanie wizyt: </h2>
<br/><br/>


<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT p.imie as ImiePacjenta, p.nazwisko as NazwiskoPacjenta, l.imie as ImieLekarza, l.nazwisko as NazwiskoLekarza, w.data as Data , w.waga, w.wzrost, w.bmi, w.ocena FROM wizyty as w JOIN pacjenci as p ON w.pacjent_id = p.id JOIN lekarze as l ON w.lekarz_id = l.id";
var_dump($conn);


if ($conn->query($sql) === TRUE) {

        echo '<table border="0" cellspacing="2" cellpadding="2"> 
        <tr> 
            <td>L.P.</td> 
            <td>Imie pacjenta </td>
            <td>Nazwisko pacjenta </td>  
            <td>Imie Lekarza </td> 
            <td>Nazwisko Lekarza </td> 
            <td>Data wizyty </td> 
            <td>Waga </td> 
            <td>Wzrost </td> 
            <td>Bmi </td> 
            <td>Ocena </td> 
        </tr>';
    
    if ($result = $mysqli->query($query)) {
        $index = 1;
        while ($row = $result->fetch_assoc()) {
            $imiePac = $row["ImiePacjenta"];
            $nazwiskoPac = $row["NazwiskoPacjenta"];
            $imieLek = $row["ImieLekarza"];
            $nazwiskoLek = $row["NazwiskoLekarza"];
            $data = $row["Data"]; 
            $waga = $row["waga"];
            $wzrost = $row["wzrost"];
            $bmi = $row["bmi"];
            $ocena = $row["ocena"];
           
    
            echo '<tr> 
                    <td>'.$index.'</td> 
                    <td>'.$imiePac.'</td> 
                    <td>'.$nazwiskoPac.'</td> 
                    <td>'.$imieLek.'</td> 
                    <td>'.$nazwiskoLek.'</td> 
                    <td>'.$data.'</td> 
                    <td>'.$waga.'</td> 
                    <td>'.$wzrost.'</td> 
                    <td>'.$bmi.'</td> 
                    <td>'.$ocena.'</td> 
                    
                </tr>';
                $index++;
        }

        $result->free();
    } 

    
} else {
    echo "Error: " . "<br>" . $conn->error."<br>".$conn->errno."<br/>".$conn->connect_error;
}

$conn->close();
?>
<br/>

</body>
</html>