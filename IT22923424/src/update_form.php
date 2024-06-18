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



// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $date = $_POST["date"];
    $eventDetails = $_POST["eventDetails"];
    $time = $_POST["time"];
    $email = $_POST["email"];
    $id = $_POST["id"];



        // Add reminder to the database
        $sql = "UPDATE  reminderstb SET date='".$date."',event_details='".$eventDetails."',time='".$time."',email='".$email."' WHERE id='".$id."'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Reminder Updated Successfully');  window.location.href = \"retrieve_data.php\";</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            // Debugging: Output the values of variables
            var_dump($date, $eventDetails, $time, $email, $eventReminder, $billReminder);
        }
    
}

// Close the database connection
$conn->close();
?>
