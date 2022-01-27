
<?php
include('header.php');
session_start();
if(!isset($_SESSION['username'])){
  header('location:enter.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Doctor Appointment system</title>
   
     <style>
     body{
         background-image: url("images/3.jpg");
                   height: 700px;

     }
   </style>

</head>
<body>
    <!-- slider -->
  

  
<div class="container">
<h1 style="margin-top: 10vh; margin-bottom: 10px; font-size: 30px">Welcome to doctors appointment System</h1>

<h2 style="margin-top: 10vh; margin-bottom: 30px">Please go to the navigation bar above to see your appointment with the doctor or to set up a new appointment </h2>
<h2 style="margin-top: 10vh; margin-bottom: 30px">Please keep in mind that Doctors are avilable during 3 (15.00) to 8 (20.00) PM  </h2>



</body>
</html>