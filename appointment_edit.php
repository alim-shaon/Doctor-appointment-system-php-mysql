<?php 
    include('header.php');
    require_once("admin/connection.php");
    session_start();
    
    $pass = "";
    if(isset($_GET['pass']) && isset($_GET['name']))
    {
        $name = $_GET['name'];
        $query = "SELECT * FROM record WHERE doctorname = '$name'";
        $result = mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($result);
        $DoctorName = $row['doctorname'];
        $DoctorGender = $row['gender'];
        $DoctorBio = $row['specialistin'];
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctorappointment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="datetime/build/jquery.datetimepicker.min.css" rel="stylesheet"/>

    <style>
     body{
          background-image: url("images/4.jpg");
          height: 935px;
    </style>

</head>
<body >

        <div class="container" >
            <div class="row" style="font-size:200%">
                <div class="col m-auto">
                       <form method="post">
                            <table class="table table-bordered table-dark table-striped table-hover">
                                    <tr>
                                        <td>
                                            Doctor Name:
                                        </td> 
                                        <td>
                                            <?php echo $DoctorName ?>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            Speciality:
                                        </td> 
                                        <td>
                                            <?php echo $DoctorBio ?>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            Select Date:
                                        </td> 
                                        <td>
                                            <input class="form-control" type="text" name="date" id="datepick" required="1" readonly>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            Select Time:
                                        </td> 
                                        <td>
                                            <input class="form-control" type="text" name="time" id="timepick" required="1" readonly>
                                        </td> 
                                    </tr>
                                    <tr> 

                                        <td> <input type="submit" class="btn btn-warning" style="font-size:100%" name="appoint" value="Update"></td>
                                        <?php
                                                $msg = "";
                                            if(isset($_POST['appoint']))
                                            {
                                                if($_POST['date']!=null && $_POST['time']!=null)
                                                {
                                                    $aid = $_GET['pass'];
                                                    $date = $_POST['date'];
                                                    $time = $_POST['time'];

                                                    $sql = "UPDATE appointments SET date = '$date', time = '$time' WHERE id = '$aid'";
                                                    $run = mysqli_query($con,$sql);
                                                    if($run)
                                                    {
                                                        $msg = "Successfully Updated";
                                                        //header("Refresh: 1; url = viewappointment.php");
                                                    }
                                                    else{
                                                        $msg = "Database Error!";
                                                    }
                                                    
                                                }
                                                else
                                                {
                                                    $msg = "Please select a Schedule";
                                                }
                                            }

                                            ?>
                                          
                                      <td><h1 style="color: red; font-size: 100%"> <?php echo $msg; ?> </h1></td>
                                       
                                    </tr>
                            </table>
                        </form>                                                                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="datetime/build/jquery.datetimepicker.full.min.js"></script>

<script>
  $("#datepick").datetimepicker({ 
      timepicker: false,
      datepicker: true,
      format:'Y-m-d',
      minDate: new Date()
  })
    
    $("#timepick").datetimepicker({ 
      timepicker: true,
      datepicker: false,
      format:'H:i',
        allowTimes: ['15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00']
  })
</script>

</body>
</html>