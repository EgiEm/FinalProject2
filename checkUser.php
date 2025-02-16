<?php
require_once('conn.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) >0 ){
        header("location: index.php");
    }else{
        echo "user not found!";
    }  
}







?>