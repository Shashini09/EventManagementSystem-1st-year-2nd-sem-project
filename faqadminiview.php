<!DOCTYPE html>
<html>
<head>
    <title>Reminder Website - FAQ</title>

    <link rel="stylesheet" type="text/css" href="faqadminview.css"/>

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
        <ul >
            <li class="current"><a href="home.html">Home</a></li>
            <li><a href="calender.html" >Calendar</a></li>
            <li><a href="todo.html">To-Do</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="faq.html">FAQ</a></li>
        </ul>
     </nav>
    
     <div class="table">
        <h1>FAQ Admin View</h1>
        <table border ="1">
            <tr>
			<th>Id</th> 
            <th>Name</th>    
            <th>Email</th>
            <th>Question</th>
			<th>Action</th>
            
            
            </tr>
            
            <?php

    require'config.php';
    
    $sql = "SELECT * From faqadminview";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
		{
    
                echo" 
				<tr>
				<td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[question]</td>
				
				<td>
				<a href='deleteadmin.php?id=row[id]' class='btn'> Delete </a></td>
				
				
                
                </tr>
				";
        } 
     }       
    else
    {
        echo "No Results";
    }
	
    ?>
               
        
        </table>
        </div>	
        <br><br><br><br><br><br>


    <footer>
        <p>RemindMe! , Copyright &copy; 2023</p>
    </footer>

    

</body>
</html>
