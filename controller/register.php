<?php 
        session_start();
        if(isset($_REQUEST['reg_btn'])){
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $confirmPassword = $_REQUEST['confirm_password'];
    
    
        //  ** DATABASE CONNECTION 
        $servername = "localhost";
        $username = "root";
        $dbpassword = "";
        $dbname = "library_management_system";
    //    var_dump(strpos($email,'.com'));
    //    exit();
       

        // ** CONDITION 
        if(empty($name)){
            $_SESSION['name'] = 'insert your name';
            header('location:../backend/register.php');
        }

       

        if(empty($email)){
           
            $_SESSION['email'] = 'insert your email';
            header('location:../backend/register.php');
        }else{
            if(strpos($email,'.com') == false){
                $_SESSION['email'] = 'your mail formation is wrong';
                header('location:../backend/register.php');  
                exit();
            }
        }


        //******SINGLE EMAIL CHECKING START******/
        $connection = mysqli_connect("$servername","$username","$dbpassword","$dbname");
        $check = "SELECT * FROM users_info";
        $emailInfo = mysqli_query($connection,$check);

        foreach($emailInfo as $data){
            if($data['email'] == $email){
              $_SESSION['email'] = 'this email already exist';
              header('location:../backend/register.php');
            }
        }
        //******SINGLE EMAIL CHECKING END******/

        
        if(empty($password)){
            $_SESSION['password'] = 'insert your password';
            header('location:../backend/register.php');
        }
        if($password !== $confirmPassword){
            $_SESSION['confirmPassword'] = "don't match your password";
            header('location:../backend/register.php');
        }
     if( $password == $confirmPassword && !empty($password && $confirmPassword && $name) &&  $data['email'] != $email){
         
        //************ ENCRIPTE PASSWORD *******/
        // if($password == $confirmPassword){
        //     $match = $password == $confirmPassword;
        //     $encriftPass = password_hash($match,PASSWORD_DEFAULT);
        // }
             // ** Create connection
             $connection = mysqli_connect("$servername","$username","$dbpassword","$dbname");
             $insert = "INSERT INTO users_info (name, email, password) VALUES ('$name', '$email', '$password');";
             $result = mysqli_query($connection,$insert);
             
             
                if($result){
                 $_SESSION['success'] = 'your registration has been successfully inserted into database';
                 header('location:../backend/login.php');
                }

     }    
    }
?>