<?php 
include('head.php');
    require_once("connection.php");
    $query = " select * from record ";
    $result = mysqli_query($con,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


   <style>
     body{
          background-image: url("img/1.jpg");
          height: 935px;

     }
   </style>
</head>

<body >
    
        <div class="container">
            <div class="row ">
                <div class="col ">
                
                        <table class="table table-bordered table-dark table-striped table-hover">
                            
                                 <tr>
                                    
                                    <td><h1> Doctor Name</h1> </td>
                                    <td><h1> Doctor Gender</h1> </td>
                                    <td><h1>Speciality</h1> </td>
                                    <td><h1> Update</h1> </td>
                                     <td><h1> Delete</h1> </td>
                                 </tr>
                            

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $DoctorId = $row['id'];
                                        $DoctorName = $row['doctorname'];
                                        $DoctorGender = $row['gender'];
                                        $DoctorBio = $row['specialistin'];
                            ?>
                                    <tr>
                                        
                                        <td><h4><?php echo $DoctorName ?><h4></td>
                                        <td><h4><?php echo $DoctorGender ?></h4></td>
                                        <td><h4><?php echo $DoctorBio ?></h4></td>
                                        <td> <button class="btn btn-primary"><a href="doctoredit.php?GetID=<?php echo $DoctorId ?>"style="color:white; text-decoration:none" >Update</a></button> </td>

                                        <td> <button class="btn btn-danger"><a href="doctordelete.php?Del=<?php echo $DoctorId ?>"style="color:white; text-decoration:none" >Delete</a></button> </td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    
                </div>
            </div>
        </div>
    
</body>
</html>