<!DOCTYPE html>
<html>

<head>

    <title>
        RemindMe! | HomePage
    </title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <header>
        <div class="container">
            <div id="heading">
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



    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
        echo "<p>You Have Not Logged In</p>
        <br>
        <a href='login.php'><button>Login</button></a>";
    } else {

        include('homepageDB/config.php');
       /*$dbservername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "RemindMe";*/

        $con = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

        $u = $_SESSION['user'];

        /*
        $f = "SELECT first_name FROM users WHERE email='$u'";
        $l = "SELECT last_name FROM users WHERE email='$u'";
        $t = "SELECT telNo FROM users WHERE email='$u'";
        $e1 = "SELECT email FROM users WHERE email='$u'";
        $p = "SELECT password FROM users WHERE email='$u'";

        $fresult = $con->query($f);
        $lresult = $con->query($l);
        $tesult = $con->query($t);
        $e1esult = $con->query($e1);
        $presult = $con->query($p);*/

        $sql = "SELECT first_name,last_name,telNo,email,password FROM users WHERE email='$u'";
        $result = $con->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo ("<form class='createAcc' id='createAccount'  method='post' action='homepageDB/update.php'>        
        <div>
            <h1>User Account</h1>
        </div>

         <div class='formrow'>
            <label>First Name:</label>
            <br>
            <input type='text' name='firstname'  id='f' required  value=" . $row['first_name'] . ">
            <br>
        </div>
        <div class='formrow'>
            <label>Last Name:</label>
            <br>
            <input type='text' name='lastname'  id='l' required  value=" . $row['last_name'] . ">
            <br>
        </div>
        <div class='formrow'>
            <label>Email:</label>
            <br>
            <input type='email' name='email' id='em' required disabled  value=" . $row['email'] . ">
            <br>
        </div>
        <div class='formrow'>
            <label>Tel No:</label>
            <br>
            <input type='tel' name='telNo' id='tel' required value=" . $row['telNo'] . ">
            <br>
        </div>
        <div class='formrow'>
            <label>Password:</label>
            <br>
            <input type='text' name='password'  id='pass1' required value=" . $row['password'] . ">
            <br>
        </div>
        <div>
        <button type='submit'>Update</button>
        </div>
        <br>
        <div>
        <button type='submit'>Delete</button>
        </div>
        </form>");
        }
        $con->close();
    }


    ?>

    <?php
        if (isset($_GET['updated'])) {
            echo ("<div class='alert alert-success mt-3' role='alert' id='success'>
                Details Updated Sucessfully !!
              </div>");
        }
        ?>

        <?php
        if (isset($_GET['failed'])) {
            echo ("<div class='alert alert-success mt-3' role='alert' id='success'>
                Update Failed !
              </div>");
        }
        ?>


    <footer>
        <p>RemindMe! , Copyright &copy; 2023</p>
        <br>
        <script>
            document.write(Date());
        </script>
    </footer>

   
</body>

</html>
