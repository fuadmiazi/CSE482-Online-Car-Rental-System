<?php 
session_start();

//variable initialization
$name= "";
$email = "";
$errors = array();

// Database connection
$db = mysqli_connect('localhost', 'root', '', 'cars');

// Register User
if(isset($_POST['reg_user'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $user_check_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user) {
        if($user['email'] === $email) {
            array_push($errors, "Email already exist");
        }
    }

    if(count($errors) == 0) {
        $password = md5($password);

        $query = "INSERT INTO users (id, name, email, phone, password) VALUES(uuid(), '$name', '$email', '$phone', '$password')";

        mysqli_query($db, $query);

        $_SESSION['success'] = "You are registered successfully";
        header('location: login.php?reg=true&login=false');
    }

}

// Login User
if(isset($_POST['login_user']))



?>