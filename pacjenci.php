<?php

require_once("connect.php");


class Pacjent{
    var $imie;
    var $nazwisko;
    var $id;

    function getId(){
        return $this->id;
    }
    function getImie(){
        return $this->imie;
    }
    function getNazwisko(){
        return $this->nazwisko;
    }
    function getImieNazwisko(){
        return "".$this->imie." ".$this->nazwisko;
    }

    function __construct( $id, $imie, $nazwisko ) {
        $this->id = $id;
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
    }
}



function pobierzPacjentow(){
$pacjenci = array();
// Create connection

$conn = new mysqli($GLOBALS['servername'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['dbname']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pacjenci";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $pacjenci[] = new Pacjent($row["id"],$row["imie"],$row["nazwisko"]);
    }
    
} else {
    echo "0 results";
}
$conn->close();
return $pacjenci;
}

?>