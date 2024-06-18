<?php
  include 'homepageDB/config.php';

  $con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

  $id=$_GET['updateid'];
  if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $fname=$_POST['fname1'];
    $lname=$_POST['lname1'];
    $email=$_POST['email1'];
    $review=$_POST['review'];

    $sql="update review set id='$id',fname1='$fname',lname1='$lname',email1='$email',review='$review' where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo"updated successfully";
        //header('location:display.php');
    }else{
        die(mysqli_error($con));
    } 
  }?>
<!DOCTYPE html>
<html>
    <head>
        <title>Review</title>
    </head> 
    <link rel="stylesheet" href="reviewpage.css">
</head>
<body>
    <header>
        <div class="">
            <div id="">
                <h1>RemindMe!</h1>
            </div>
        </div>
     </header>
     <nav>
        <ul>
            <li class="current"><a href="home.html">Home</a></li>
            <li><a href="calender.html">Calendar</a></li>
            <li><a href="todo.html">To-Do</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="faq.html">FAQ</a></li>
        </ul>
     </nav>

     <div class="boxstyle">
        <form method = "POST">
        <h1>ADD REVIEW</h1><br>
        <label>Id</label><br>
        <input type="text" name="id"><br>
        <label>First Name</label><br>
        <input type = "text" name="fname1"><br>
        <label>Last Name</label><br>
        <input type="text" name="lname1"><br>
        <label>Email</label><br>
        <input type = "email" name="email1"><br>
        <label>Add Review</label><br>
        <textarea rows="4" name="review"></textarea><br>

        <button id="buttonstyle" type="submit"name = "submit">update</button>

     </div>
</form>
     </body>
</html>