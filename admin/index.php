<?php 
include('head.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Doctor's Registration Form</title>

       <style>
     body{
          background-image: url("img/1.jpg");
          height: 935px;

     }
   </style>
</head>
<body class="bg-dark">

        <div class="container-fluid">
            <div class="row" style="font-size:200%; font-variant: bold">
                <div class="col-lg-10 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="bg-primary text-white text-center py-3"> Add new Doctor </h2>
                        </div>
                      
                        <div class="card-body">

                            <form action="doctorinsert.php" method="post">
                              <table class="table table-bordered  table-striped">
                                  <tr>
                                  <td>
                                    <h3>Doctor's Name</h3>
                                  </td>
                              
                                <td><input type="text" class="form-control " placeholder="Name " name="name"></td>
                                </tr>
                                   <tr>
                                <td>
                                    <h3>
                                        Gender
                                    </h3>
                                </td>
                                <td><input type="text" class="form-control" placeholder="male/female " name="gender"></td>
                                </tr>
                                <tr>
                                  <td><h3>Doctor's Speciality</h3></td>

                                <td><input type="text" class="form-control"  name="bio"></td>
                              </tr>

                              </table>
                            <button class="btn btn-primary col-sm-offset-5 col-sm-2" name="submit"><h3>Submit</h3></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>