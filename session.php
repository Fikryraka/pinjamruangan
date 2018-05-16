<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peminjamanruangan";

 $Role  = query_database("SELECT * FROM user WHERE idUser='".$_POST["idUser"]."'");

if(!isset($_SESSION['idUser'])){
   // go to login page code here.
    // in login page, store data into session, use following:
    $_SESSION['idUser']="username";
}
else{
   $username=$_SESSION['username'];// get previous session and go your project page
}
