<?php
    session_start();
     require_once("admin/connection.php");

    $id= $_GET['ID'];
    $patient = $_SESSION['username'];
     
    include('header.php');

    $sql= "Delete from appointments where id= '$id'";
    $result = mysqli_query($con,$sql);
    header('location:viewappointment.php');

?>