<?php

    include 'homepageDB/config.php';

    $con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

    $id=$_GET['updateid'];
    if(isset($_POST['addtolist'])){
        $Task = $_POST['task'];
        $Time = $_POST['time2'];

        $sql="update task set id =$id, task= '$Task', time2= '$Time' where id=$id";

        $result=mysqli_query($con,$sql);
        if($result){
            echo "updated successfully";
           // header('location:dis.php');
        }else{
            die(mysqli_error($con));
        }



    }


?>

<html>
<head>
	<title>
		RemindMe!
	</title>
	<link rel="stylesheet" href="todo.css"/>
</head>
	<body class="bgcolor">
		<header>
				<h1>RemindMe!</h1>
		</header>
		<nav>
			<ul>
				<li class="it"><a href="home.html">Home</a></li>
				<li> <a href="calander.html">calander</a></li>
				<li><a href="todo.html">To-Do</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="faq.html">FAQ</a></li>
			</ul>
		</nav>


      <div class ="task" >
        <table-caption>Add Task</table-caption>
      </div> 

      <form method="POST">
        <div class="name">
            <label for="tname">Task:</label>
            <input type="text" id="Task" name="task" autocomplete="off">
        </div>

        <br>

        <div class="time">
            <label for="time">Time:</label>
            <input type="text" id="Time" name="time2" autocomplete="off">
        </div>

        <button id="addtolist" name="addtolist">Add To List</button>
        
      </form>

	
	
	</body>
	<footer>
		<p>RemindMe!,copyright &copy;2023</p>
	</footer>

	
</html>
		