<?php
   include 'homepageDB/config.php';
   $con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="reviewpage.css">
    <style>
        table,tr,th,td{
            border:1px solid black;
        }

        </style>
</head>
<body>

<div class ="container">
    
    <table class="tablestyle">
        <thead><b>
            <tr>
                <th>id</th>
                <th>first name</th>
                <th>last name</th>
                <th>email</th>
                <th>review</th>
                <th>operation</th></tr>
</thead></b>
<?php
    $sql = "select * from review";
    $result = mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $fname=$row['fname1'];
            $lname=$row['lname1'];
            $email=$row['email1'];
            $review=$row['review'];
            echo '  <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$fname.'</td>
            <td>'.$lname.'</td>
            <td>'.$email.'</td>
            <td>'.$review.'</td>
        <td >
        <button style="background-color:blue"><a href="update.php? updateid='.$id.'">Update</a></button>
        <button style="background-color:red"><a href="delete.php? deleteid='.$id.'">Delete</a></button>
        </td>
                
           </tr>';
        }
    }
      ?>
      
      </table>
          
    
</body>
</html>