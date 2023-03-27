<?php

include_once 'dbconnect.php';
if(isset($_POST['submit']))
{
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $email = $_POST['email'];
    $sql = "INSERT INTO user_data (imie,nazwisko,login,haslo,email) VALUES ('$imie','$nazwisko','$login','$haslo','$email')";
    if (mysqli_query($conn, $sql)){
        echo "Pomyślnie zarejestrowano";
    } else{
        echo "Error:" . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}   

?>