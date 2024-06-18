<?php
session_start();
if(!isset($_POST['email'])){
    header('Location:../login.html');
}
$e=$_POST['email'];
$p=$_POST['password'];

include('config.php');

$con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

$sql="SELECT * FROM users WHERE email='$e' AND password='$p'";

$result=$con->query($sql);
if($result->num_rows>0){
    $con->close();
    $_SESSION['user']=$e;
    header('Location:../home.html');
}else{
    header("Location:../login.php?invalid");
}
$con->close();
?>