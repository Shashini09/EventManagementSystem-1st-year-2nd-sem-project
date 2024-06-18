
<?php
    include 'homepageDB/config.php';

    $con=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
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

    <div class ="container">
        <button><a href="user.php">Add task</button></a>
</div>
   <table class="table">
    <thead>
        <tr>
            <th scope ="col">id</th>
            <th scope ="col">Task</th>
            <th scope ="col">Time</th>
            <th scope ="col">operations</th>
        </tr>
</thead>
<tbody>
    <?php

    $sql="select * from task";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id =$row['id'];
            $Task =$row['task'];
            $Time =$row['time2'];
            echo  ' <tr>
            <th scope="row">'.$id.'<th>
            <td> '.$Task.'</td>
            <td>'.$Time.'</td>
            <td>
    <button><a href="update1.php? updateid='.$id.'">update</a></button>
    <button><a href="delete1.php? deleteid='.$id.'">delete</a></button>
            </td>


            </tr>';

        }
    }





?>


</tbody>
<table>
    






       
	
	
	</body>
	<footer>
		<p>RemindMe!,copyright &copy;2023</p>
	</footer>

	
</html>
		
		
	
