<!DOCTYPE html>
<html lang="en">
<head>
  <title>sign up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  

     <style>
     body{
         background-image: url("images/1.jpg");
                   

   </style>

</head>
<body>
  
<div class="container" >
  <h1 style="margin-left: 35vh; margin-bottom: 50px">Patient Registration Page</h1>
  
  <form class="form-horizontal" action="registration.php" method="POST">
    <div class="form-group">
      <div class="col-sm-11">
        <input type="text" class="form-control" placeholder="Enter username" name="user" required>
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-11">
        <input type="text" class="form-control" placeholder="Enter E-mail" name="usermail" required>
      </div>
    </div>

    <div class="form-group">
        <div class="col-sm-11">
          <input type="password" class="form-control" placeholder="Enter password" name="pwd" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-11">
          <input type="password" class="form-control" id="cnpwd" placeholder="Enter same password again" name="cnpwd" required>
          <span id="cnpwd-error" class="error"></span>


        </div>
      </div>
    <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-10">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>