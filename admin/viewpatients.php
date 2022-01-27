<?php
    session_start();
    include('head.php');
    $con = mysqli_connect('localhost','root','','appointment');
    $sql1=" select * from appointments;" ;
    $result1 = mysqli_query($con,$sql1);
    if($result1){
        if(mysqli_num_rows($result1) > 0){
          while($row = mysqli_fetch_array($result1)){
            $DoctorName = $row['doctorname'];
            $patient = $row['patient_name'];
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
          background-image: url("img/1.jpg");
          height: 935px;

     }
   </style>
</head>

<body>
        <div class="container">
            <div class="row"  style="font-size:200%; font-variant: bold">
                <div class="col ">

                        <table class="table table-bordered table-dark table-striped">
                            <tr>
                                
                                <td><h1> Doctor Name </h1></td>
                                <td><h1>Appointment Date</h1> </td>
                                <td><h1> Appointment Time </h1></td>
                                <td><h1>Patient Name</h1></td>
                            </tr>

                            <?php

$sql1=" select * from appointments" ;
$result1 = mysqli_query($con,$sql1);

if($result1){
    if(mysqli_num_rows($result1) > 0){
      while($row = mysqli_fetch_array($result1)){
?>
                            <tr>
                                
                                <td><?php echo $row['doctorname'];?></td>
                                <td> <?php echo $row['date'];?> </td>
                                <td> <?php echo $row['time'];?></td>
                                <td><?php echo $row['patient_name'];?></td>
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