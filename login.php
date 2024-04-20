<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','spotify') or die("Connection Failed");

        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $name = $_POST['username'];
            $pwd = $_POST['password'];
          

            $sql = "INSERT INTO `login` (`username`, `password`)  VALUES ('$name','$pwd')";

          

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