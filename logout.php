<?php
session_start();
if (isset($_SESSION)){
    session_destroy();
//    var_dump($_SESSION);
    header('location: index.php');
}