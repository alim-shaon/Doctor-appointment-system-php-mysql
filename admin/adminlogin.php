<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log_in page for admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 

   <style>
     .image1{
          background-image: url("img/1.jpg");
          height: 938px;

     }
   </style>
</head>
<body>

  <div class="image1">

<div class="container" >
  <h1 style="margin-top: 30vh; margin-bottom: 30px">Admin Log-In </h1>
  
  <form class="form-horizontal" action="logincheak.php" method="POST">
    <div class="form-group">
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Username" name="admin" required>
      </div>
    </div>
    <div class="form-group">
        <div class="col-sm-4">
          <input type="password" class="form-control" placeholder="Password" name="pass" required>
        </div>
      </div>
    <div class="form-group">        
      <div class=" col-sm-4">
        <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
        <a href="http://localhost/DocApp/enter.php" style="text-decoration: none;"><button type="button" class="btn btn-primary">Home</button></a>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>