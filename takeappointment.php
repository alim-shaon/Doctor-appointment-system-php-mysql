<?php 
    include('header.php');
    require_once("admin/connection.php");
    $query = "";
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctor Appiontment system</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

             <style>
     body{
          background-image: url("images/1.jpg");
          height: 935px;

     }
            </style>
</head>
<body >
        <div class="container" >
            <div class="input-group mt-5">
               <form method="post">
               <div class="input-group-append">

                <?php
                    if(isset($_POST['search']))
                    {
                        $search = trim($_POST['searchText']);
                        $query = " select * from record where doctorname LIKE '$search%' or specialistin LIKE '$search%'";
                    }
                    else
                    {
                        $query = " select * from record ";

                    }
                    $result = mysqli_query($con,$query);
                ?>
                 
                </div>
                </form>
            </div>
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered table-dark table-striped table-hover">
                            <tr>
                                
                                <th> <h1>Doctor Name</h1> </th>
                                <th><h1> Speciality</h1> </th>
                                <th><h1> Select your Doctor</h1> </th>
                                
                            </tr>

                            <?php
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $DoctorId = $row['id'];

                            ?>
                                    <tr style="font-size: 200%">
                                        <td><?php echo $row['doctorname']?></td>
                                        <td><?php echo $row['specialistin'] ?></td>
                                        <td> <button class="btn btn-success" name="appointment_button" > <a href="appointment.php?pass=<?php echo $row['id']; ?> & name=<?php echo $row['doctorname']; ?> " style="color: white;font-size: 150%; text-decoration:none">Select</a></button></td>
                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        
            <div class="input-group mt-5">
               <form method="post">
               <div class="input-group-append">
                <input type="text" class="form-control" name="searchText" placeholder="Doctor's Name and Speciality" aria-describedby="basic-addon2">
                <input class="btn btn-outline-info" name="search" value="Search" type="submit">
                <?php
                    if(isset($_POST['search']))
                    {
                        $search = trim($_POST['searchText']);
                        $query = " select * from record where doctorname LIKE '$search%' or specialistin LIKE '$search%'";
                    }
                    else
                    {
                        $query = " select * from record ";

                    }
                    $result = mysqli_query($con,$query);
                ?>
                 
                </div>
                </form>
            </div>


        </div>
    </div>
    

</body>
</html>