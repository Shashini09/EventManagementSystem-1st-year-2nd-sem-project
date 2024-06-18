<?php
  include 'homepageDB/config.php';

  $con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
  
  if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $fname=$_POST['fname1'];
    $lname=$_POST['lname1'];
    $email=$_POST['email1'];
    $review=$_POST['review'];

    $sql="insert into review (id,fname1,lname1,email1,review)
    values('$id','$fname','$lname','$email','$review')";
    $result = mysqli_query($con,$sql);
    if($result){
        //"data inserted successfully";
        header('location:display.php');
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
            <li><a href="IT22923424/src/calendar.html">Calendar</a></li>
            <li><a href="todo.html">To-Do</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="faq.html">FAQ</a></li>
        </ul>
     </nav>

     <div class="boxstyle">
        <form method = "POST" ><br>
        <h1 style="color:orange">ADD REVIEW</h1><br>
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

        <button id="buttonstyle" type="submit"name = "submit">Submit</button>

     </div>
</form>
<footer> 
    <p>RemindMe! , Copyright &copy; 2023</p>
</footer>

     </body>
</html>