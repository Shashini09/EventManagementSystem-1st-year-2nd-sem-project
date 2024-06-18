<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location:../createaccount.php");
}

$first = $_POST['firstname'];
$last = $_POST['lastname'];
$tel= $_POST['telNo'];
$e = $_POST['email'];
$p = $_POST['password'];

echo($e);

include('config.php');

$con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

$update = "UPDATE users SET first_name = '$first' , last_name = '$last' , telNo = '$tel' , password = '$p' WHERE email='$e'";

$result = $con->query($update);

if ($result == TRUE) {
    header("Location:../userAccount.php?updated");
} else {
    header("Location:../userAccount.php?failed");
}
$con->close();
?>