<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','spotify signup') or die("Connection Failed");

        if(isset($_POST['Username']) && isset($_POST['Email']) && isset($_POST['Password']))
        {
            $Username = $_POST['Username'];
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];
           

            $sql = "INSERT INTO `signup` (`Username`, `Email`, `Password`)  VALUES ('$Username','$Email','$Password')";

          

            if(mysqli_query($conn,$sql))
            {
                echo "signup Successfull";
            }
            else
            {
                echo "signup unsuccessful";
            }

        }
    }