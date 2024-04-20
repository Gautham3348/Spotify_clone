<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['Submit']))
    {
        $conn = mysqli_connect('localhost','root','','newsletter') or die("Connection Failed");

        if(isset($_POST['Name']) && isset($_POST['Email']) )
        {
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            

            $sql = "INSERT INTO `newsletter` (`Name`, `Email`)  VALUES ('$Name','$Email')";

          

            if(mysqli_query($conn,$sql))
            {
                echo "Entry Successfull";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>