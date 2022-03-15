<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
require_once 'dbHandler.php';

//REGISTER
if (isset($_POST['register'])) {
    extract($_POST);
    $hashed_pass = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT into user (fname, lname, email, password, phone_no, gender)"
        . "VALUES('$fname','$lname', '$email', '$hashed_pass', '$tel_no', '$gender')";
    var_dump($sql);
    try{
        $db = new dbHandler();

        if($db->getConn()->query($sql)){
            echo '<script>
                    window.alert("Registration Successful!");
                   </script>';
        }
       header('location: login.php' );
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
    mysqli_close($db->getConn());
}

if (isset($_POST['login'])){
    extract($_POST);
    $sql = "SELECT * from user WHERE email = '$email'";
    try {
        $db = new dbHandler();
        $result = $db->getConn()->query($sql);
        $user = mysqli_fetch_assoc($result);
        //var_dump($user);
        if(password_verify($password, $user['password'])){
           session_start();
           unset($user['password']);
            echo '<script>
                    window.alert("Login Successful!");
                   </script>';
           foreach($user as $key => $value){
                $_SESSION[$key] = $value;

           }


        }
        mysqli_free_result($result);
        mysqli_close($db->getConn());
        header('location: index.php');
        var_dump($_SESSION);
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
}




?>


</body>
</html>
