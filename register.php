<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


$conn = new mysqli('127.0.0.1:3307', 'neeraj', 'somneeraj99', 'college');

if(isset($_POST["username"], $_POST["password"])) 
    {     

        $name = $_POST["username"]; 
        $password = $_POST["password"]; 

        $result1 = mysqli_query("SELECT email, password FROM user_details WHERE username = '".$name."' AND  password = '".$password."'");

        if(mysqli_num_rows($result1) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $name; 
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}

