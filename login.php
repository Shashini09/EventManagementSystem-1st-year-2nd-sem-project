<!DOCTYPE html>
<html>

<head>

    <title>Login | RemindMe!</title>

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


    <form action="homepageDB/login2pg.php" method="post" class="loginform" id="loginform">
        <div>
            <h1>Login</h1>
            <br>

            <input type="email" placeholder="Email" name="email" id="email">
            <div class="error" id="ers">

            </div>

            <br>

            <input type="password" placeholder="Password" name="password" id="password">
            <div class="error"></div>

            <br>
            <button type="submit">Login</button>
            <br>
            <a href="createaccount.php">Don't have an account ?</a>

        </div>

        <?php
        if (isset($_GET['approved'])) {
            echo ("<div class='alert alert-success mt-3' role='alert' id='success'>
                Signup Successful! Please Login!
              </div>");
        }
        ?>

        <?php
        if (isset($_GET['invalid'])) {
            echo ("<div class='alert alert-danger mt-3' role='alert' id='success'>
                 Invalid Username or Password!
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
</body>

</html>