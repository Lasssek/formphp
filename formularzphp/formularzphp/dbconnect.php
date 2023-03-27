<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);
if (!$conn) {
    die("Połączenie nie udane ". mysqli_connect_error());
}
echo "połączono"
?>
