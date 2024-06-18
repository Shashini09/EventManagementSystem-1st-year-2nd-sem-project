<!DOCTYPE html>
<html>
    <head>
        <title>Create Account| RemindMe!</title>
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
       <form action="homepageDB/create.php" method="post" class="createAcc" id="createAccount" onsubmit="return verifyPasswords()">        
        <div>
            <h1>Create Account</h1>
        </div>
        <div class="formrow">
            <label>First Name:</label>
            <br>
            <input type="text" name="firstname" required>
            <br>
        </div>
        <div class="formrow">
            <label>Last Name:</label>
            <br>
            <input type="text" name="lastname" required>
            <br>
        </div>
        <div class="formrow">
            <label>Email:</label>
            <br>
            <input type="email" name="email" required onkeyup="hideError()">
            <br>
        </div>
        <div class="formrow">
            <label>Tel No:</label>
            <br>
            <input type="tel" name="telNo" required>
            <br>
        </div>
        <div class="formrow">
            <label>Password:</label>
            <br>
            <input type="text" name="password"  id="pass1" required onkeyup="hideError()">
            <br>
        </div>
        <div class="formrow">
            <label>Confirm Password:</label>
            <br>
            <input type="text" name="password"  id="pass2" required onkeyup="hideError()">
            <br>
        </div>
        <div class="formrow">
            <button type="submit">Sign Up</button>
        </div>
        <div class="alert alert-danger mt-3" role="alert" id="error" style="visibility:hidden">
        Passwords Do Not Match!
      </div>

        <?php
        if (isset($_GET['failed'])) {
          echo ("<div class='alert alert-warning mt-3' role='alert' id='failed'>
          User Already Exist!
        </div>");
        }
        ?>

       </form>

       <footer>
        <p>RemindMe! , Copyright &copy; 2023</p>
        <br>
            <script>
                document.write(Date());
            </script>
    </footer>


    <script>
        function verifyPasswords() {
          var p1 = document.getElementById("pass1").value;
          var p2 = document.getElementById("pass2").value;
          if (p1 != p2) {
            document.getElementById("error").style.visibility = "visible";
            return false;
          } else {
            return true;
          }
        }
    
        function hideError() {
          document.getElementById("error").style.visibility = "hidden";
          hideFailed();
        }
    
        function hideFailed() {
          document.getElementById("failed").style.visibility = "hidden";
        }
      </script>
    </body>
</html>