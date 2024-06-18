<?php

require'homepageDB/config.php';

$con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

$name = $_POST["name"];
$email = $_POST["email"];
$question = $_POST["question"];


$sql = "INSERT INTO faq (name,email3,question) VALUES ('$name','$email','$question')";
if($con->query($sql)) {
    echo "<script> alert('Recorded added successfully!!!')</script>";
}
else{
    echo "<script> alert('Error: Unsuccessfull')</script>";
    
}
mysqli_close($con);
?>