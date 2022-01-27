<?php 
    include('head.php');
    require_once("connection.php");
    $DoctorID = $_GET['GetID'];
    $query = " select * from record where id='".$DoctorID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Doctor_ID = $row['id'];
        $Doctor_Name = $row['doctorname'];
        $Doctor_Gender = $row['gender'];
        $Doctor_Bio = $row['specialistin'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctorupdate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
     body{
          background-image: url("img/1.jpg");
          height: 935px;

     }
   </style>

</head>
<div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h1 class="bg-primary text-white text-center py-3"> Update Form </h1>
                        </div>
                        <div class="card-body">

                            <form action="doctorupdate.php?ID=<?php echo $Doctor_ID ?>" method="post">
                                <input type="text" class="form-control mb-5" placeholder=" Doctor Name " name="name" value="<?php echo $Doctor_Name ?>">

                                <input type="text" class="form-control mb-5" placeholder=" Doctor Gender " name="gender" value="<?php echo $Doctor_Gender ?>">

                                <input type="text" class="form-control mb-5" placeholder=" Doctor Bio " name="bio" value="<?php echo $Doctor_Bio ?>">

                                <button class="btn btn-primary btn-lg" name="doctorupdate">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>