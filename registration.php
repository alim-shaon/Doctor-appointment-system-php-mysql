<?php

session_start();
//header('location:login.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'appointment');
$name = $_POST["user"];
$pass = $_POST["pwd"];
$email = $_POST["usermail"];
$cnpass = $_POST["cnpwd"];
if($pass == $cnpass)
{

 $s = "select * from user where name= '$name'";
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);
if($num == 1){
    echo'username already taken ';
}
else{
    $reg = " insert into user (name ,mail, password) values ('$name','$email','$pass')";
    mysqli_query($con,$reg);
    echo'registration successfully done';
    header('location:login.php');
}


}
else{
	echo ' password didnt match ';
    header('location:signup.php');
}

mysqli_close($con);
?>