<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','spotify') or die("Connection Failed");

        if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) )
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            

            $sql = "INSERT INTO `signup` (`username`, `email`, `password`)  VALUES ('$username','$email','$password')";

          

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