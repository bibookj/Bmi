<?php

session_start();
require_once('connect.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$pacjent = $_POST['pacjenci'];
$waga = $_POST['waga'];
$wzrost = $_POST['wzrost'];
$bmi = ($waga)/($wzrost*$wzrost/10000);
$data = date("Y-m-d H:i:s");
$sql = "INSERT INTO wizyty (pacjent_id, lekarz_id, data, waga, wzrost, bmi)
VALUES ('$pacjent',1,'$data','$waga','$wzrost','$bmi')";
$_SESSION["waga"] = $waga;
$_SESSION["wzrost"] = $wzrost;
$_SESSION["bmi"] = $bmi;
if ($conn->query($sql) === TRUE) {
    header('Location: bmipacjenta.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


