<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('bootstrap.php'); ?>
</head>
<body>
    <div class="container">
        <form class="col-sm-4 ml-auto mr-auto border p-5" style="margin-top:150px;" method="post" action="http://localhost:8080/Integrated_Project/authenticate.php">
            <div class="row">
                <div class="col-sm-12 ml-auto mr-auto">
                    <?php 
                        if (isset($_GET['error']))
                        {
                            $num =($_GET['error']);
                            $errors = array("Please Login To Access This Area.", "Invalid UserName or Password. Try Again.");
                            echo "<p class='text-danger'>".$errors[$num] . "</p>";
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 ml-auto mr-auto text-center">
                    <h2> Login </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group ml-auto mr-auto mt-2">
                    <!--    UserName    -->
                    <label for="UserName">User Name </label>
                    <input class="form-control" type="text" name="UserName" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group ml-auto mr-auto">
                    <!--    Password  -->
                    <label for="UserPass">Password</label>
                    <input class="form-control" type="text" name="UserPass" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group ml-auto mr-auto">
                    <input type="submit" class="btn btn-primary" style="width:100%;" value="Login"  />
                </div>
            </div>
            <div class="row">
                <div class='col-sm-12 ml-auto mr-auto text-center'>
                    <a  href="create_user.php">Create Account</a><br/>
                    <a  href="forgot_password.php">I Forgot Password? </a>               
                </div>
            </div>
        </form>
    </div>
</body>
</html>

