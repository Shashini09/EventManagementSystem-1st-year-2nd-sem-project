<?php 
    include 'homepageDB/config.php';

    $con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];



        $sql="delete from task where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            //echo "deleted successfully";
            header('location:dis.php');
        }else{
            die(mysqli_error($con));
        }
    }


?>
