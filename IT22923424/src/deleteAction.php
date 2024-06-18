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

    $id = $_GET['id'];

    $sql = "DELETE FROM reminderstb WHERE id=". $id;

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Record Deleted.');
            window.location.href = \"retrieve_data.php\";
        </script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
?>