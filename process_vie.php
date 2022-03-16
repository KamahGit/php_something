<?php
session_start();
var_dump($_POST);
require_once 'dbHandler.php';
if (isset($_POST['vie'])){
    extract($_POST);
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * from candidates WHERE user_id = '$user_id'";
    $db = new dbHandler();
    $result = $db->getConn()->query($sql);
    if (mysqli_num_rows($result)>0){
        $_SESSION['vie_fail']=true;

    }
    else{
        $sql = "INSERT into candidates (user_id, pos_id, election_id) VALUES ('$user_id','$pos_id','$elec_id')";
        $result = $db->getConn()->query($sql);
        if ($result) {
            $_SESSION['vie_fail']=false;
        }

    }
    header('location: vie.php');
    mysqli_free_result($result);
    mysqli_close($db->getConn());

        //var_dump($_SESSION);
}