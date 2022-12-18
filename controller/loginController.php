 <?php
 session_start();
    if(isset($_REQUEST['loginBtn'])){
       $loginEmail =  $_REQUEST['loginEmail'];
       $loginPassword = $_REQUEST['loginPassword'];

                //  ** DATABASE CONNECTION 
                $servername = "localhost";
                $username = "root";
                $dbpassword = "";
                $dbname = "library_management_system";

                $loginInfoCheck = "SELECT * FROM users_info";
                $connection = mysqli_connect("$servername","$username","$dbpassword","$dbname");
                $loginQuery = mysqli_query($connection,$loginInfoCheck);

                foreach($loginQuery as $login){
                    if($login['email'] == $loginEmail && $login['password'] == $loginPassword){
                        header('location:../index.php');
                    }else{
                        $_SESSION['error'] = 'your password or email not match';
                        header("location:../backend/login.php");
                    }
                }     
    }
 ?>