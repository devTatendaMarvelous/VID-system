<?php  
require 'includes/db.php';
//require 'includes/form_handlers/register_handler.php';
//require 'includes/form_handlers/login_handler.php';



 if(isset($_POST['login_button'])){
    $em = $_POST['log_email'];
    $pword = $_POST['log_password'];

    $select_query = mysqli_query($con, "SELECT * FROM instructors WHERE email = '$em' AND password='$pword'");
    $result = mysqli_num_rows($select_query);

    if($result >= 1) {
        $row = mysqli_fetch_array($select_query);
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        session_start();
        $_SESSION['username'] = $em;

        header("Location: home.php");
    } else {
        header("Location: index.php");
    }
 }


?>


<html>
<head>
    <title>Login | Driving School</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>
<body>

    <div class="wrapper">

        <div class="login_box">

            <div class="login_header">
                <h1>Driving School</h1>
                Login
            </div>
            <br>
            <div id="first">

                <form method="POST">
                    <input type="email" name="log_email" placeholder="Email Address" required>
                    <br>
                    <input type="password" name="log_password" placeholder="Password">
                    <br>
                    <input type="submit" name="login_button" value="Login">
                    <br>

                </form>

            </div>

            
            </div>

        </div>

    </div>


</body>
</html>