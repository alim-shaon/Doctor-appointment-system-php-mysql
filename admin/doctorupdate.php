<?php 

    require_once("connection.php");

    if(isset($_POST['doctorupdate']))
    {
        $Doctor_Id = $_GET['ID'];
        $Doctor_Name = $_POST['name'];
        $Doctor_Gender = $_POST['gender'];
        $Doctor_Bio = $_POST['bio'];

        $query = " update record set doctorname = '".$Doctor_Name."', gender='".$Doctor_Gender."',specialistin='".$Doctor_Bio."' where id='".$Doctor_Id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:doctorview.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:doctorview.php");
    }


?>