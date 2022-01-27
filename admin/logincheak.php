<?php
session_start();
require_once("connection.php");
if(isset($_POST['submit'])){
    $username = $_POST['admin'];
    $password = $_POST['pass'];
    $sql = "select * from admin where user = '$username' and pass = '$password'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_num_rows($query);

        if($row ==1){
            $session['user'] = $username;
            header('location:doctorview.php');
        }
        else{
            header('location: adminlogin.php');
        }
            echo "Error updating record: " . mysqli_error($conn);
    
}


?>