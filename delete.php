<?php
include 'homepageDB/config.php';

$con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from review where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "deleted successfully";
        header('location:display.php');

    }else{
        die(mysqli_error($con));
    }
}