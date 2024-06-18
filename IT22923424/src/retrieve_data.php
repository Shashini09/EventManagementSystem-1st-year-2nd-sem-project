<?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "RemindMe";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>RemindMe! | Reminder List</title>
  <link rel="stylesheet" href="Reminder.css">
  <script src="jquery.js"></script>
  <style>
    table, td, th {
  border: 1px solid;
  padding: 10px;
  /* margin: 50px; */
}

table {
  width: 100%;
  border-collapse: collapse;
}
.btn{
  background-color: black;
  color: white;
  padding: 10px 20px 10px 20px;
  border: none;
  border-radius: 5px;
}

.btn-red{
  background-color: red;
  color: white;
  padding: 10px 20px 10px 20px;
  border: none;
  border-radius: 5px;
}

.btn:hover{
  background-color: white;
  color: black;
}

.btn-red:hover{
  background-color: white;
  color: black;
}


.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

  </style>
</head>
<body>
  <header>
    <div>
      <h1>RemindMe!</h1>
    </div>
  </header>
  <nav>
    <ul>
    <li><a href="../../home.html">Home</a></li>
    <li><a href="calendar.html">Calendar</a></li>
      <li><a href="../../todo.html">To-Do</a></li>
      <li><a href="../../contactus.html">Contact Us</a></li>
      <li><a href="../../faq.html">FAQ</a></li>
    </ul>
  </nav>
  <h2>Reminder List</h2>
  <table>
    <tr>
      <th>Date</th>
      <th>Event Details</th>
      <th>Time</th>
      <th>Email</th>
      <th>Event Reminder</th>
      <th>Bill Reminder</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
 <?php

    // Retrieve data from the database
    $sql = "SELECT * FROM reminderstb";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['event_details']."</td>"; 
            echo "<td>".$row['time']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['event_reminder']."</td>";
            echo "<td>".$row['bill_reminder']."</td>";
            echo "<td style='text-align:center'><button class='update-btn btn openModalBtn' onclick=\"loadData('".$row['date']."','".$row['event_details']."','".$row['time']."','".$row['email']."','".$row['id']."')\">Update</button></td>";
            echo "<td style='text-align:center'><a href='deleteAction.php?id=".$row['id']."'><button class='delete-btn btn-red'>Delete</button></a></td>";
            echo "</tr>"; 
        }
    } else {
        echo "<tr><td colspan='8'>No reminders found</td></tr>";
    }

    // Close the database connection
    $conn->close();
    ?> 
  </table>



<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>Modal Title</h3>
 
    
    <form method="POST" action="update_form.php">
        <input type="hidden" id="id" name="id" />
          <p>Set Date</p>
          <input type="date" id="date_field" name="date" />
          <p>Add Event/Bill Payments Details</p>
          <input type="text" id="eventDetails" name="eventDetails" />
          <p>Set Time</p>
          <input type="time" id="time" name="time" />
          <p>Your Email</p>
          <input type="email" id="email" name="email" />
          <br /><br />
          <button id="btnstyle3" type="submit" name="UpdateReminder">Update Reminder</button>
          
        </form>
  </div>
</div>



  <script>
    var modal = document.getElementById("myModal");
var closeBtn = document.getElementsByClassName("close")[0];
var openModalBtns = document.getElementsByClassName("openModalBtn");

// Open the modal when any of the buttons with class "openModalBtn" are clicked
for (var i = 0; i < openModalBtns.length; i++) {
  openModalBtns[i].addEventListener("click", function() {
    modal.style.display = "block";
  });
}

// Close the modal when the close button is clicked
closeBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

window.addEventListener("click", function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});

function loadData(date,event_details,time,email,id){
  
  $('#eventDetails').val(event_details);
  $('#date_field').val(date);
  $('#time').val(time);
  $('#email').val(email);
  $('#id').val(id);

}

  </script>

</body>
</html>
