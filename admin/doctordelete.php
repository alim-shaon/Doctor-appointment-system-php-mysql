<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $Doctor_ID = $_GET['Del'];
            $query = " delete from record where id = '".$Doctor_ID."'";
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