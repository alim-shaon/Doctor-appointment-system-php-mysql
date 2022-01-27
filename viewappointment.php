<?php
 require_once("admin/connection.php");
    session_start();
    $patient = $_SESSION['username'];
   
    include('header.php');

  
  
    $sql1=" select * from appointments where patient_name =  '$patient';" ;
    $result1 = mysqli_query($con,$sql1);
    
    if($result1){
        if(mysqli_num_rows($result1) > 0){
          while($row = mysqli_fetch_array($result1)){
               
            $DoctorName = $row['doctorname'];
            $AppointmentDate = $row['date'];
            $AppointmentTime = $row['time'];
        
          }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctorwiew</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style>
     body{
          background-image: url("images/1.jpg");
          height: 935px;

     }
   </style>
</head>
<body>
        <div class="container">
            <div class="row" style="font-size:200%; font-variant: bold">
                <div class="col ">

                        <table class="table ">

                            <tr>
                                
                                <th> Yor Doctors </th>
                                <th> Appointment Date </th>
                                <th> Time </th>
                                <th> Update </th>
                                <th> Cancel </th>
                            </tr>

                            <?php

$sql1=" select * from appointments where patient_name =  '$patient';" ;
$result1 = mysqli_query($con,$sql1);

if($result1){
    if(mysqli_num_rows($result1) > 0){
      while($row = mysqli_fetch_array($result1)){
 
?>

                            <tr>
                                
                                <td><?php echo $row['doctorname'];?></td>
                                <td> <?php echo $row['date'];?> </td>
                                <td> <?php echo $row['time'];?></td>
                                <td> 
                                    
                                    <button class="btn btn-primary btn-lg" name="appointment_button" > <a href="appointment_edit.php?pass=<?php echo $row['id']; ?> & name=<?php echo $row['doctorname']; ?> " style="color: white; text-decoration:none">Update appiontment</a></button>
                                
                                </td>

                                <td> <button class="btn btn-danger btn-lg"><a href="appointmentcancel.php? ID=<?php echo $row['id'];?>"style="color:white; text-decoration:none" >Cancel appiontment</a></button> </td>
                            </tr>

                            <?php
                                                }
                                        }
                                  } 
                                  ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>