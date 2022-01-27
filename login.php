<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  

     <style>
     .image{
         background-image: url("images/1.jpg");
                   height: 938px;

     }
   </style>

</head>
<body>
  
  <div class="image">
<div class="container">
<h1 style="margin-top: 30vh; margin-bottom: 30px">Patient log-in</h1>


  
  <form   class="form-horizontal" action="validation.php" method="POST">
    <div class="form-group">
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Enter username" name="user">
      </div>
    </div>
    <div  class="form-group">
      <div class="col-sm-4">          
        <input type="password" class="form-control" placeholder="Enter  password" name="pwd">
      </div>
    </div>

    <div class="form-group">        
      <div class=" col-sm-4">
        <button type="submit" class="btn btn-primary">Log In</button>
        <a href="enter.php" style="text-decoration: none;"><button type="button" class="btn btn-primary">Home</button></a>
      </div>
    </div>
    
  </form>
  <h4>If you are new then <a href="signup.php" style="text-decoration: none;"><button type="button" class="btn btn-primary">Sign-up</button></a></h4>

</div>
  </div>
</body>
</html>
