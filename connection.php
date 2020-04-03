<?php
    //database details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'foodie';
    
    //create connection and select DB
    if(isset($_POST['signup_btn'])) {
        $username = $_POST['username']
        $email = $_POST['email']
        $password = $_POST['password']
    }
    $conn = mysqli_connect ($'localhost', 'root', '', foodie);
     
    if(!$conn){
        echo "Database connection failed "
    }
   
    $sql = "INSERT INTO user(username, email, password) VALUES ( ) "




?>