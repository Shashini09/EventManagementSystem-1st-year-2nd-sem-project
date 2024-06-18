<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:../login2pg.php');
}

include('config.php');

$con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

$email=$_SESSION['user'];



$sql = "DELETE FROM users WHERE email='$email'";

$result = $con->query($sql);

if ($result == TRUE) {
    header("Location:../home.html");
} else {
   header("Location:../userAccount.php?failed");
}
$con->close();

session_destroy();
?>