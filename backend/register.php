<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-5 shadow mx-auto mt-5">
                <div class="card shadow p-2">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="../controller/register.php" method="POST">
                            <label for="name">name</label>
                            <input type="text" class="form-control mb-2" placeholder="enter your name" id="name"
                                name="name">

                            <!-- SUCCESS MESSAGE START  -->
                            <?php 
                                        if(isset($_SESSION['name'])){
                                            ?>
                            <span class="text-danger"><?php echo $_SESSION['name']; echo "<br/>";?></span>
                            <?php
                                        }
            
                                    ?>
                            <!-- SUCCESS MESSAGE END  -->

                            <label for="email">email</label>
                            <input type="email" class="form-control mb-2" placeholder="enter your email" id="email"
                                name="email">
                            <!-- SUCCESS MESSAGE START  -->
                            <?php 
                                        if(isset($_SESSION['email'])){
                                            ?>
                            <span class="text-danger"><?php echo $_SESSION['email']; echo "<br/>";?></span>
                            <?php
                                        }
            
                                    ?>
                            <!-- SUCCESS MESSAGE END  -->
                            <label for="password">password</label>
                            <input type="password" class="form-control mb-2" placeholder="enter your password"
                                id="password" name="password">
                            <!-- SUCCESS MESSAGE START  -->
                            <?php 
                                        if(isset($_SESSION['password'])){
                                            ?>
                            <span class="text-danger"><?php echo $_SESSION['password']; echo "<br/>";?></span>
                            <?php
                                        }
            
                                    ?>
                            <!-- SUCCESS MESSAGE END  -->
                            <label for="confirmpassword">confirm password</label>
                            <input type="password" class="form-control mb-2" placeholder="enter your confirm password"
                                id="confirmpassword" name="confirm_password">
                            <!-- SUCCESS MESSAGE START  -->
                            <?php 
                                        if(isset($_SESSION['confirmPassword'])){
                                            ?>
                            <span class="text-danger"><?php echo $_SESSION['confirmPassword']; echo "<br/>";?></span>
                            <?php
                                        }
            
                                    ?>
                            <!-- SUCCESS MESSAGE END  -->
                            <button class="w-100 btn btn-primary text-center text-center mt-2"
                                name="reg_btn">Registration Now</button>
                            <a href="./login.php" class="text-center btn btn-info w-100 mt-2 text-light">login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
 session_unset();
?>