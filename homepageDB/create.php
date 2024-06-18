<?php
if (!isset($_POST['email'])) {
    header("Location:../createaccount.html");
}
$first = $_POST['firstname'];
$last = $_POST['lastname'];
$tel= $_POST['telNo'];
$e = $_POST['email'];
$p = $_POST['password'];

include('config.php');

$con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

$sql = "INSERT INTO users( first_name,last_name,telNo,email,password) VALUES ('$first','$last','$tel','$e','$p')";

$result = $con->query($sql);

if ($result == TRUE) {
    header("Location:../login.php?approved");
} else {
    header("Location:../createaccount.php?failed");
}
$con->close();
?>