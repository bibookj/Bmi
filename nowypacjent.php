<?php
require_once('connect.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$sql = "INSERT INTO pacjenci (imie, nazwisko)
VALUES ('$imie','$nazwisko')";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>