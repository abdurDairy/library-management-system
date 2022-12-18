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
    <div class="container h-100">
        <div class="row justify-content-center align-self-center h-100">
            <div class="col-md-5 mx-auto mt-5">
                <div class="card shadow p-2">
                    <!-- SUCCESS MESSAGE START  -->
                    <?php 
                      if(isset($_SESSION['success'])){
                        ?>
                    <div class="alert alert-info" role="alert">
                        <?php
                          echo $_SESSION['success'];
                        ?>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- SUCCESS MESSAGE END  -->

                    <!-- SUCCESS MESSAGE START  -->
                    <?php 
                      if(isset($_SESSION['error'])){
                        ?>
                    <div class="alert alert-danger" role="alert">
                        <?php
                          echo $_SESSION['error'];
                        ?>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- SUCCESS MESSAGE END  -->
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="../controller/loginController.php" method="POST">

                            <label for="email">email</label>
                            <input type="email" class="form-control mb-2" placeholder="enter your email" id="email"
                                name="loginEmail" require>

                            <label for="password">password</label>
                            <input type="password" class="form-control mb-2" placeholder="enter your password"
                                id="password" name="loginPassword">

                            <button class="w-100 btn btn-primary text-center text-center mt-2"
                                name="loginBtn">login</button>
                            <a href="./register.php" class="text-center btn btn-info w-100 mt-2 text-light">Registration
                                Now</a>
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