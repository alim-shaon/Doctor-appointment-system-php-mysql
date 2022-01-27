<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['gender']) || empty($_POST['bio']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $DoctorName = $_POST['name'];
            $DoctorGender = $_POST['gender'];
            $DoctorBio = $_POST['bio'];

            $query = " insert into record (doctorname, gender,specialistin) values('$DoctorName','$DoctorGender','$DoctorBio')";
            $result = mysqli_query($con,$query);

            if($result)
            {
               // $last_id=mysql_insert_id($con);
                header("location:doctorview.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }

mysqli_close($con);
?>